<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller 
{
	private $limit = 12;
	public function index()
	{
		$offset = ($this->input->get('offset')?$this->input->get('offset'):0);
		$json = file_get_contents(base_url('assets/json/photo.json'));
		$list = json_decode($json);
		$gallery_view['list'] = $list->list[$offset/$this->limit];
		$total = $list->total;
		$config = pag_tmp();
		$config['base_url'] = 'gallery';
		$config['total_rows'] = $total;
		$config['per_page'] = $this->limit;
		$this->load->library('pagination');
		$this->pagination->initialize($config); 
		$gallery_view['pagination'] = $this->pagination->create_links();

		$data['content'] = $this->load->view('gallery_view',$gallery_view,true);
		$this->load->view('template_view',$data);
	}
}
