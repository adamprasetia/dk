<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}
	function get($offset=0,$limit=20)
	{
		$this->db->select(array(
			'a.*',
			'b.name as author'
		));
		$this->db->from('article a');
		$this->db->join('users b','a.user_create=b.id','left');
		$this->db->where('a.status',1);
		$this->db->order_by('a.date_create','desc');
		$this->db->offset($offset);
		$this->db->limit($limit);
		return $this->db->get()->result();
	}
	function get_total()
	{
		$this->db->from('article a');
		$this->db->where('a.status',1);
		return $this->db->get()->num_rows();
	}
	function get_by_id($id)
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