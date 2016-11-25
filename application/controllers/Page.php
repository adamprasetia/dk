<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('page_model');
	}
	public function index($name='')
	{
		if ($name) {
			$page = $this->page_model->get_page_by_name($name);
			if ($page) {
				$page_view['title'] = $page->title;
				$page_view['content'] = $page->content;
				$data['content'] = $this->load->view('page_view',$page_view,true);
			}else{
				$data['content'] = $this->load->view('404_view','',true);
			}
		}else{
			$data['content'] = $this->load->view('404_view','',true);
		}
		$this->load->view('template_view',$data);													
	}
}
