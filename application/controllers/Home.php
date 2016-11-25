<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('home_model');
	}
	public function index()
	{
		$data = $this->get_data();
		$this->load->view('home_view',$data);
	}
	private function get_data()
	{
		/* Photo */
		// $json = file_get_contents(base_url('assets/json/photo.json'));
		// $photo = json_decode($json);
		$photo = $this->home_model->get_photo();
		$data['list'] = $photo;

		/* Headline */
		// $json = file_get_contents(base_url('assets/json/article_headline.json'));
		// $article_headline = json_decode($json);
		$article_headline = $this->home_model->get_headline();
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
		$article = $this->home_model->get_article();
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
}
