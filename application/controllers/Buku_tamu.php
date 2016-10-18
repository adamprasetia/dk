<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tamu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Nama Lengkap','required|trim|max_length[100]');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|max_length[150]');
		$this->form_validation->set_rules('address','Alamat','required|trim|max_length[200]');
		$this->form_validation->set_rules('message','Pesan','required|trim|max_length[200]');
		$this->form_validation->set_rules('captcha','Captcha','required|trim');
		$this->form_validation->set_rules('code','Code','required|trim|matches[captcha]');
		$this->form_validation->set_error_delimiters('<p class="error">','</p>');

		if ($this->form_validation->run()===false) {
			$buku_tamu_view['captcha'] = $this->gen_captcha();
			$data['content'] = $this->load->view('buku_tamu_view',$buku_tamu_view,true);
			$this->load->view('template_view',$data);						
		}else{
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'address'=>$this->input->post('address'),
				'message'=>$this->input->post('message'),
				'date_create'=>date('Y-m-d H:i:s')

			);
			$this->load->model('buku_tamu_model');
			$this->buku_tamu_model->add($data);
			$this->session->set_flashdata('success','Pesan anda sudah terkirim, Terima kasih');
			redirect('buku_tamu');
		}
	}
	private function gen_captcha()
	{
		$this->load->helper('captcha');
		$digits = 4;
		$word = rand(pow(10, $digits-1), pow(10, $digits)-1);
		$vals = array(
		        'word'          => $word,
		        'img_path'      => './assets/captcha/',
		        'img_url'       => config_item('assets').'captcha/',
		        'img_width'     => '150',
		        'img_height'    => 30,
		        'expiration'    => 7200,
		        'word_length'   => 8,
		        'font_size'     => 16,
		        'img_id'        => 'Imageid',
		        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

		        // White background and border, black text and red grid
		        'colors'        => array(
		                'background' => array(255, 255, 255),
		                'border' => array(255, 255, 255),
		                'text' => array(0, 0, 0),
		                'grid' => array(255, 40, 40)
		        )
		);

		$cap = create_captcha($vals);
		return $cap;
	}
}
