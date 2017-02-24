<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->helper('text');
	}
	public function index($name='')
	{
		if ($name) {
			$data['content'] = $this->load->view($name.'_view','',true);
		}else{
			$data['content'] = $this->load->view('404_view','',true);
		}
		$this->load->view('template_view',$data);													
	}
}
