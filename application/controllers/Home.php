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
		/* Photo by JSON */
		$json = file_get_contents(base_url('assets/json/photo.json'));
		$photo = json_decode($json);
		$data['photo'] = $photo->list[0];

		/* Photo by DB */
		// $photo = $this->home_model->get_photo();
		// $data['photo'] = $photo;
		
		/* Article by JSON*/
		$json = file_get_contents(base_url('assets/json/article.json'));
		$article = json_decode($json);
		$article = $article->list[0];
		
		/* Article by DB*/
		// $article = $this->home_model->get_article();

		$i=0;
		foreach ($article as $row) {
			preg_match_all('/<img[^>]+>/i',$row->content, $img);
		    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
			$article[$i]->image = trim($src[1][0],'"');
			$i++;
		}
		$data['article'] = $article;

		$buku_tamu = $this->home_model->get_buku_tamu();
		$data['buku_tamu'] = $buku_tamu;
		return $data;
	}
}
