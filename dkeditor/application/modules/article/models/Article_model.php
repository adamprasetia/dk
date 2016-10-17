<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model
{
	private $tbl_name = 'article';
	private $tbl_key 	= 'id';

	public function query()
	{
		$data[] = $this->db->select(array(
			'a.*',
			'b.filename',
			'c.name as status_name',
			'd.name as author'
		));
		$data[] = $this->db->from($this->tbl_name.' a');
		$data[] = $this->db->join('photo b','a.photo = b.id','left');
		$data[] = $this->db->join('article_status c','a.status = c.id','left');
		$data[] = $this->db->join('users d','a.user_create = d.id','left');
		$data[] = $this->search();
		if($this->input->get('status') <> '')
			$data[] = $this->db->where('a.status',$this->input->get('status'));
		$data[] = $this->db->order_by($this->general->get_order_column('a.date_create'),$this->general->get_order_type('desc'));
		return $data;
	}
	public function get(){
		$this->query();
		$this->db->limit($this->general->get_limit());
		$this->db->offset($this->general->get_offset());
		return $this->db->get();
	}
	public function get_article($limit=10,$offset=0)
	{
		$this->query();
		$this->db->where('a.status',1);
		$this->db->limit($limit);
		$this->db->offset($offset);
		return $this->db->get();
	}
	public function get_article_headline()
	{
		$this->query();
		$this->db->where('a.status',1);
		$this->db->where('is_headline',1);
		$this->db->limit(4);
		return $this->db->get();
	}
	public function get_article_by_id($id)
	{
		$this->query();
		$this->db->where('a.id',$id);
		return $this->db->get();
	}
	public function get_from_field($field,$value){
		$this->db->where($field,$value);
		return $this->db->get($this->tbl_name);	
	}
	public function add($data){
		$this->db->insert($this->tbl_name,$data);
		return $this->db->insert_id();
	}
	public function edit($id,$data){
		$this->db->where($this->tbl_key,$id);
		$this->db->update($this->tbl_name,$data);
	}
	public function delete($id){
		$this->db->where($this->tbl_key,$id);
		$this->db->delete($this->tbl_name);
	}
	public function count_all(){
		$this->query();
		return $this->db->get()->num_rows();
	}
	public function search(){
		$result = $this->input->get('search');
		if($result <> ''){
			return $this->db->where('(a.title like "%'.$result.'%")');
		}		
	}
}