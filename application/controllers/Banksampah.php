<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banksampah extends CI_Controller 
{
	public function index()
	{
		$data['content'] = $this->load->view('banksampah_view','',true);
		$this->load->view('template_view',$data);
	}
}
