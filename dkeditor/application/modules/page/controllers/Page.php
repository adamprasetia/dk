<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MY_Controller 
{
	private $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->data['title'] = 'Page';
		$this->data['subtitle'] = $this->lang->line('list');
		$this->data['index'] = 'page';
		$this->load->model($this->data['index'].'/page_model');
	}
	public function index()
	{
		$offset = $this->general->get_offset();
		$limit 	= $this->general->get_limit();
		$total 	= $this->page_model->count_all();

		$this->data['action'] = $this->data['index'].'/search'.get_query_string(null,'offset');
		$this->data['action_delete'] = $this->data['index'].'/delete'.get_query_string();
		$this->data['add_btn'] = anchor($this->data['index'].'/add'.get_query_string(),$this->lang->line('new'));
		$this->data['list_btn'] = anchor($this->data['index'].get_query_string(),$this->lang->line('list'));
		$this->data['delete_btn'] = '<button id="delete-btn" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> '.$this->lang->line('delete_by_checked').'</button>';

		$this->table->set_template(tbl_tmp());

		$head_data = array(
			'title' => 'Judul',
			'name' => 'Nama',
			'date_create' => 'Tanggal'
		);
		$heading[] = '#';
		foreach($head_data as $r => $value){
			$heading[] = anchor($this->data['index'].get_query_string(array('order_column'=>"$r",'order_type'=>$this->general->order_type($r))),"$value ".$this->general->order_icon("$r"));
		}		
		$heading[] = $this->lang->line('action');
		$this->table->set_heading($heading);
		$result = $this->page_model->get()->result();
		$i=1+$offset;
		foreach($result as $r){
			$this->table->add_row(
				$i++,
				anchor($this->data['index'].'/edit/'.$r->id.get_query_string(),$r->title),
				$r->name,
				$r->date_create,
				anchor($this->data['index'].'/edit/'.$r->id.get_query_string(),$this->lang->line('edit'))
				."&nbsp;|&nbsp;".anchor($this->data['index'].'/delete/'.$r->id.get_query_string(),$this->lang->line('delete'),array('onclick'=>"return confirm('".$this->lang->line('confirm')."')"))
			);
		}
		$this->data['table'] = $this->table->generate();
		$this->data['total'] = page_total($offset,$limit,$total);
		
		$config = pag_tmp();
		$config['base_url'] = $this->data['index'].get_query_string(null,'offset');
		$config['total_rows'] = $total;
		$config['per_page'] = $limit;

		$this->pagination->initialize($config); 
		$this->data['pagination'] = $this->pagination->create_links();

		$data['content'] = $this->load->view($this->data['index'].'/page_list',$this->data,true);
		$this->load->view('template',$data);
	}
	public function search(){
		$data = array(
			'search'=>$this->input->post('search'),
			'limit'=>$this->input->post('limit')
		);
		redirect($this->data['index'].get_query_string($data));		
	}
	private function _field(){
		$data = array(
			'title' => $this->input->post('title'),
			'name' => $this->input->post('name'),
			'content' => $this->input->post('content')
		);
		return $data;		
	}
	private function _set_rules(){
		$this->form_validation->set_rules('title','Judul','required|trim');
		$this->form_validation->set_rules('name','Nama','required|trim');
		$this->form_validation->set_rules('content','Konten','required|trim');
		$this->form_validation->set_error_delimiters('<p class="error">','</p>');
	}
	public function add(){
		$this->_set_rules();
		if($this->form_validation->run()===false){
			$this->data['add_btn'] = anchor($this->data['index'].'/add'.get_query_string(),'Tambah');
			$this->data['list_btn'] = anchor($this->data['index'].get_query_string(),'List');
			$this->data['action'] = $this->data['index'].'/add'.get_query_string();
			$this->data['breadcrumb'] = $this->data['index'].get_query_string();
			$this->data['heading'] = $this->lang->line('new');
			$this->data['owner'] = '';
			$data['content'] = $this->load->view($this->data['index'].'/page_form',$this->data,true);
			$this->load->view('template',$data);
		}else{
			$data = $this->_field();
			$data['user_create'] = $this->user_login['id'];
			$data['date_create'] = date('Y-m-d H:i:s');
			$id = $this->page_model->add($data);
			$this->generate_form_json($id);
			$this->generate_headline_json();
			$this->generate_json();
			$this->session->set_flashdata('alert','<div class="alert alert-success">'.$this->lang->line('new_success').'</div>');
			redirect($this->data['index'].'/add'.get_query_string());
		}
	}
	public function edit($id){
		$this->_set_rules();
		if($this->form_validation->run()===false){
			$this->data['row'] = $this->page_model->get_from_field('id',$id)->row();
			$this->data['add_btn'] = anchor(current_url(),$this->lang->line('edit'));
			$this->data['list_btn'] = anchor($this->data['index'].get_query_string(),$this->lang->line('list'));
			$this->data['action'] = $this->data['index'].'/edit/'.$id.get_query_string(); 
			$this->data['breadcrumb'] = $this->data['index'].get_query_string();
			$this->data['heading'] = $this->lang->line('edit');
			$this->data['owner'] = owner($this->data['row']);
			$data['content'] = $this->load->view($this->data['index'].'/page_form',$this->data,true);
			$this->load->view('template',$data);
		}else{
			$data = $this->_field();
			$data['user_update'] = $this->user_login['id'];
			$data['date_update'] = date('Y-m-d H:i:s');
			$this->page_model->edit($id,$data);
			$this->generate_form_json($id);
			$this->generate_headline_json();
			$this->generate_json();
			$this->session->set_flashdata('alert','<div class="alert alert-success">'.$this->lang->line('edit_success').'</div>');
			redirect($this->data['index'].'/edit/'.$id.get_query_string());
		}
	}
	public function delete($id=''){
		if($id<>''){
			$this->page_model->delete($id);
		}
		$check = $this->input->post('check');
		if($check<>''){
			foreach($check as $c){
				$this->page_model->delete($c);
			}
		}
		$this->generate_headline_json();
		$this->generate_json();
		$this->session->set_flashdata('alert','<div class="alert alert-success">'.$this->lang->line('delete_success').'</div>');
		redirect($this->data['index'].get_query_string());
	}
	public function generate_form_json($id)
	{
		$this->load->model('page_model');
		$data = $this->page_model->get_page_by_id($id)->row();
		$json_encode = json_encode($data);
		$upload_path = BASEDIR.'assets/json';
		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0755, true);
		}
		$this->load->helper('file');
		if (!write_file(BASEDIR.'assets/json/page_'.$id.'.json', $json_encode))
		{
		    return false;
		}
		return true;
	}
	public function generate_headline_json()
	{
		$this->load->model('page_model');
		$data = $this->page_model->get_page_headline()->result();
		$i=0;
		foreach ($data as $row) {
			preg_match_all('/<img[^>]+>/i',$row->content, $img);
		    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
			$data[$i]->image = trim($src[1][0],'"');
			$i++;
		}

		$json_encode = json_encode($data);
		$upload_path = BASEDIR.'assets/json';
		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0755, true);
		}
		$this->load->helper('file');
		if (!write_file(BASEDIR.'assets/json/page_headline.json', $json_encode))
		{
		    return false;
		}
		return true;
	}
	public function generate_json()
	{
		$this->load->model('page_model');
		$total = $this->page_model->count_all();
		$total_page = ceil($total/$this->general->get_limit());
		$data_page = array('total'=>$total);
		$data = array();
		for ($i=0;$i<$total_page;$i++){
			$offset = $i*$this->general->get_limit();
			$result = $this->page_model->get_page($this->general->get_limit(),$offset)->result();
			$j=0;
			foreach ($result as $row) {
				preg_match_all('/<img[^>]+>/i',$row->content, $img);
			    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
				$result[$j]->image = trim($src[1][0],'"');
				$j++;
			}
			$data[$i] = $result;
		}
		$data_page['list'] = $data;
		$json_encode = json_encode($data_page);
		$upload_path = BASEDIR.'assets/json';
		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0755, true);
		}
		$this->load->helper('file');
		if (!write_file(BASEDIR.'assets/json/page.json', $json_encode))
		{
		    return false;
		}
		return true;
	}	
}