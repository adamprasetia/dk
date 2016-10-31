<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}
	function get_photo()
	{
		$this->db->from('photo');
		$this->db->order_by('date_create','desc');
		$this->db->limit(4);
		return $this->db->get()->result();
	}
	function get_gallery($limit = 10,$offset=0)
	{
		$this->db->from('photo');
		$this->db->order_by('date_create','desc');
		$this->db->limit($limit);
		$this->db->offset($offset);
		return $this->db->get()->result();		
	}
	function get_gallery_total()
	{
		return $this->db->count_all('photo');
	}
	function get_headline()
	{
		$this->db->select(array(
			'a.*',
			'b.name as author'
		));
		$this->db->from('article a');
		$this->db->join('users b','a.user_create=b.id','left');
		$this->db->where('a.status',1);
		$this->db->where('a.is_headline',1);
		$this->db->order_by('a.date_create','desc');
		$this->db->limit(4);
		return $this->db->get()->result();		
	}
	function get_article()
	{
		$this->db->select(array(
			'a.*',
			'b.name as author'
		));
		$this->db->from('article a');
		$this->db->join('users b','a.user_create=b.id','left');
		$this->db->where('a.status',1);
		$this->db->order_by('a.date_create','desc');
		$this->db->limit(10);
		return $this->db->get()->result();
	}
	function get_article_by_id($id)
	{
		$this->db->select(array(
			'a.*',
			'b.name as author'
		));
		$this->db->from('article a');
		$this->db->join('users b','a.user_create=b.id','left');
		$this->db->where('a.status',1);
		$this->db->where('a.id',$id);
		$this->db->limit(1);
		return $this->db->get()->row();
	}
}