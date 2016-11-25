<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {	

	private $limit = 10;

	function __construct(){
		parent::__construct();
		$this->load->helper('text');		
		$this->load->model('article_model');
	}
	public function index()
	{
		$offset = ($this->input->get('offset')?$this->input->get('offset'):0);
		$article = $this->article_model->get($offset,$this->limit);
		$total = $this->article_model->get_total();
		$i=0;
		foreach ($article as $row) {
			preg_match_all('/<img[^>]+>/i',$row->content, $img);
		    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
			$article[$i]->image = trim($src[1][0],'"');
			$i++;
		}
		$article_view['article'] = $article;

		$config = pag_tmp();
		$config['base_url'] = site_url('article');
		$config['total_rows'] = $total;
		$config['per_page'] = $this->limit;

		$this->load->library('pagination');
		$this->pagination->initialize($config); 
		$article_view['pagination'] = $this->pagination->create_links();

		$data['content'] = $this->load->view('article_view',$article_view,true);
		$this->load->view('template_view',$data);

	}
	public function read($id)
	{
		/* Article */
		// $json = file_get_contents(base_url('assets/json/article_'.$id.'.json'));
		// $article = json_decode($json);
		$article = $this->article_model->get_by_id($id);
		$article_view['article'] = $article;

		/* Article Lain */
		// $json = file_get_contents(base_url('assets/json/article.json'));
		// $article = json_decode($json);
		$article = $this->article_model->get(0,5);
		$i=0;
		foreach ($article as $row) {
			preg_match_all('/<img[^>]+>/i',$row->content, $img);
		    preg_match_all('/src=("[^"]*")/i',$img[0][0], $src);
			$article[$i]->image = trim($src[1][0],'"');
			$i++;
		}
		$article_view['article_lain'] = $article;

		$data['content'] = $this->load->view('article_read_view',$article_view,true);
		$this->load->view('template_view',$data);
	}
}
