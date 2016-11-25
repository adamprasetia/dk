<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}
	function get_page_by_name($name)
	{
		$this->db->select(array(
			'a.*',
		));
		$this->db->from('page a');
		$this->db->where('a.name',$name);
		$this->db->limit(1);
		return $this->db->get()->row();		
	}
}