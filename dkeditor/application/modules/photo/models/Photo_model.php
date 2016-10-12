<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_model extends CI_Model
{
	private $tbl_name = 'photo';

	function get($limit=10,$offset=0)
	{
		$this->db->from($this->tbl_name);
		$this->db->order_by('date_create','desc');
		$this->db->limit($limit,$offset);
		return $this->db->get();
	}
	function get_by_id($id)
	{
		$this->db->from($this->tbl_name);
		$this->db->where('id',$id);
		return $this->db->get();
	}
	function get_gallery($limit=10,$offset=0)
	{
		$this->db->from($this->tbl_name);
		$this->db->where('is_gallery','1');
		$this->db->order_by('date_create','desc');
		$this->db->limit($limit,$offset);
		return $this->db->get();
	}
	function count_all()
	{
		return $this->db->count_all($this->tbl_name);
	}
	function insert($data)
	{
		$this->db->insert($this->tbl_name,$data);
		$result = $this->db->affected_rows();
		if (!$result) {
			$errNo   = $this->db->_error_number();
			$errMess = $this->db->_error_message();
			return $errNo.':'.$errMess;
		}
		return true;
	}
	function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->tbl_name,$data);
		$result = $this->db->affected_rows();
		if (!$result) {
			$errNo   = $this->db->_error_number();
			$errMess = $this->db->_error_message();
			return $errNo.':'.$errMess;
		}
		return true;
	}
	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->tbl_name);
		$result = $this->db->affected_rows();
		if (!$result) {
			$errNo   = $this->db->_error_number();
			$errMess = $this->db->_error_message();
			return $errNo.':'.$errMess;
		}
		return true;
	}
}