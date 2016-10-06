<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller 
{
	public function index()
	{
		$data['content'] = $this->load->view('profil_view','',true);
		$this->load->view('template_view',$data);
	}
}
