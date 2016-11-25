<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
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
}