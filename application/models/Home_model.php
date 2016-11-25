<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
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
}