<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller 
{
	public function index()
	{
		$json = file_get_contents(base_url('assets/json/photo.json'));
		$list = json_decode($json);
		// echo "<pre>";var_dump($list);exit;
		// $gallery_view['list'] = file_get_contents(filename);
		$data['content'] = $this->load->view('gallery_view',$gallery_view,true);
		$this->load->view('template_view',$data);
	}
}
