<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->helper('text');
	}
	private function get_data()
	{
		/* Photo */
		$json = file_get_contents(base_url('assets/json/photo.json'));
		$photo = json_decode($json);
		$data['list'] = $photo->list[0];

		/* Headline */
		$json = file_get_contents(base_url('assets/json/article_headline.json'));
		$article_headline = json_decode($json);
		$data['article_headline'] = $article_headline;
		
		/* Article */
		$json = file_get_contents(base_url('assets/json/article.json'));
		$article = json_decode($json);
		$data['article'] = $article->list[0];

		return $data;
	}
	public function index()
	{
		$data = $this->get_data();
		$this->load->view('home_view',$data);
	}
	public function home()
	{
		$data = $this->get_data();
		$this->load->view('home_view',$data);
	}
	public function article($id)
	{
		/* Article */
		$json = file_get_contents(base_url('assets/json/article_'.$id.'.json'));
		$article = json_decode($json);
		$article_view['article'] = $article;

		/* Article Lain */
		$json = file_get_contents(base_url('assets/json/article.json'));
		$article = json_decode($json);
		$article_view['article_lain'] = $article->list[0];

		$data['content'] = $this->load->view('article_view',$article_view,true);
		$this->load->view('template_view',$data);
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
