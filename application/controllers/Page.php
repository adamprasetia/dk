<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('page_model');
	}
	private function get_data()
	{
		/* Photo */
		// $json = file_get_contents(base_url('assets/json/photo.json'));
		// $photo = json_decode($json);
		$photo = $this->page_model->get_photo();
		$data['list'] = $photo;

		/* Headline */
		// $json = file_get_contents(base_url('assets/json/article_headline.json'));
		// $article_headline = json_decode($json);
		$article_headline = $this->page_model->get_headline();
		$i=0;
		foreach ($article_headline as $row) {
			preg_match_all('/<img[^>]+>/i',$row->content, $img);
		    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
			$article_headline[$i]->image = trim($src[1][0],'"');
			$i++;
		}

		$data['article_headline'] = $article_headline;
		
		/* Article */
		// $json = file_get_contents(base_url('assets/json/article.json'));
		// $article = json_decode($json);
		$article = $this->page_model->get_article();
		$i=0;
		foreach ($article as $row) {
			preg_match_all('/<img[^>]+>/i',$row->content, $img);
		    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
			$article[$i]->image = trim($src[1][0],'"');
			$i++;
		}
		$data['article'] = $article;

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
		// $json = file_get_contents(base_url('assets/json/article_'.$id.'.json'));
		// $article = json_decode($json);
		$article = $this->page_model->get_article_by_id($id);
		$article_view['article'] = $article;

		/* Article Lain */
		// $json = file_get_contents(base_url('assets/json/article.json'));
		// $article = json_decode($json);
		$article = $this->page_model->get_article();
		$i=0;
		foreach ($article as $row) {
			preg_match_all('/<img[^>]+>/i',$row->content, $img);
		    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
			$article[$i]->image = trim($src[1][0],'"');
			$i++;
		}
		$article_view['article_lain'] = $article;

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
		// $json = file_get_contents(base_url('assets/json/photo.json'));
		// $list = json_decode($json);
		// $gallery_view['list'] = $list->list[$offset/$limit];
		$list = $this->page_model->get_gallery($limit,$offset);
		$total = $this->page_model->get_gallery_total();
		$gallery_view['list'] = $list;
		$config = pag_tmp();
		$config['base_url'] = 'gallery';
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
	public function sitemap()
	{
		$data['content'] = $this->load->view('sitemap_view','',true);
		$this->load->view('template_view',$data);
	}	
}
