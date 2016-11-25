<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {	

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['content'] = $this->load->view('sitemap_view','',true);
		$this->load->view('template_view',$data);
	}
}
