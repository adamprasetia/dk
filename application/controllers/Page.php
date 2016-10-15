<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	public function home()
	{
		$this->load->view('home_view');
	}
	public function profil()
	{
		$data['content'] = $this->load->view('profil_view','',true);
		$this->load->view('template_view',$data);
	}
	public function visimisi()
	{
		$data['content'] = $this->load->view('visimisi_view','',true);
		$this->load->view('template_view',$data);
	}	
	public function gallery()
	{
		$limit = 12;
		$offset = ($this->input->get('offset')?$this->input->get('offset'):0);
		$json = file_get_contents(base_url('assets/json/photo.json'));
		$list = json_decode($json);
		$gallery_view['list'] = $list->list[$offset/$limit];
		$total = $list->total;
		$config = pag_tmp();
		$config['base_url'] = 'page/gallery';
		$config['total_rows'] = $total;
		$config['per_page'] = $limit;
		$this->load->library('pagination');
		$this->pagination->initialize($config); 
		$gallery_view['pagination'] = $this->pagination->create_links();

		$data['content'] = $this->load->view('gallery_view',$gallery_view,true);
		$this->load->view('template_view',$data);
	}
	public function banksampah()
	{
		$data['content'] = $this->load->view('banksampah_view','',true);
		$this->load->view('template_view',$data);
	}	
}
