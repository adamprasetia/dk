<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends MY_Controller 
{
	private $limit = 12;

	public function index()
	{
		$offset = $this->input->get('offset');
		$this->load->model('photo_model');
		$photo_list['list'] = $this->photo_model->get($this->limit,$offset)->result();
		$total = $this->photo_model->count_all();

		$config = pag_tmp();
		$config['base_url'] = 'photo';
		$config['total_rows'] = $total;
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config); 
		$photo_list['pagination'] = $this->pagination->create_links();

		$data['content'] = $this->load->view('photo_list',$photo_list,true);
		$this->load->view('template',$data);
	}
	public function upload()
	{
		$photo_form['action'] = 'photo/do_upload';
		$photo_form['title'] = 'Unggah Foto';
		$data['content'] = $this->load->view('photo_form',$photo_form,true);
		$this->load->view('template',$data);		
	}
	public function do_upload()
	{
		$result_upload = $this->upload_photo();
		if ($result_upload['status'])
		{
			if ($result_upload['thumb']!==true) {
				$this->session->set_flashdata('error',$result_upload['thumb']);
			}
			$field = $this->get_field('add');
			$field['filename'] = date('Y').'/'.date('m').'/'.date('d').'/'.$result_upload['message']['file_name'];
            $this->load->model('photo_model');
            $result_insert = $this->photo_model->insert($field);
            if ($result_insert==true) {
            	$this->session->set_flashdata('success','Data berhasil di upload');
	            if (!$this->generate_json()) {
	            	$this->session->set_flashdata('error','Gagal membuat file json');
	            }
            }else{
            	$this->session->set_flashdata('error',$result_insert);
            }
		}
		else
		{
        	$this->session->set_flashdata('error',$result_upload['message']);
		}
        redirect('photo/upload');
	}
	public function edit($id)
	{
		$this->load->model('photo_model');
		$photo_form['title'] = 'Edit Foto';
		$photo_form['row'] = $this->photo_model->get_by_id($id)->row();
		$photo_form['action'] = 'photo/do_edit/'.$id;
		$data['content'] = $this->load->view('photo_form',$photo_form,true);
		$this->load->view('template',$data);		
	}
	public function delete($id)
	{
		$this->load->model('photo_model');
		$result_delete_photo = $this->delete_foto($id);
		if ($result_delete_photo) {
			$result_delete = $this->photo_model->delete($id);
			if ($result_delete) {
				$this->session->set_flashdata('success','Data berhasil di hapus');
				$result_json = $this->generate_json();
				if (!$result_json) {
					$this->session->set_flashdata('error','Gagal generate json file');
				}
			}else{
				$this->session->set_flashdata('error',$result_update);
			}			
		}else{
			$this->session->set_flashdata('error','Gagal delete file');
		}
		redirect('photo');
	}
	private function delete_foto($id)
	{
		$this->load->model('photo_model');
		$row = $this->photo_model->get_by_id($id)->row();
		$filepath = BASEDIR.'assets/photo/'.$row->filename;
		$filepath_thumb = BASEDIR.'assets/photo/'.thumb($row->filename);
		if (is_file($filepath)){
			if (!unlink($filepath)) {
				return false;
			}
		}
		if (is_file($filepath_thumb)){
			if (!unlink($filepath_thumb)) {
				return false;
			}
		}
		return true;
	}
	public function do_edit($id)
	{
		$field = $this->get_field('edit');
		if ($_FILES['userfile']['name']) {
			$result_upload = $this->upload_photo();
			if ($result_upload['status']) {
				$field['filename'] = date('Y').'/'.date('m').'/'.date('d').'/'.$result_upload['message']['file_name'];
				$result_delete_photo = $this->delete_foto($id);
				if (!$result_delete_photo) {
					$this->session->set_flashdata('error','Gagal delete file lama');
				}
			}else{
				$this->session->set_flashdata('error',$result_upload['message']);
			}
		}
        $this->load->model('photo_model');
        $result_update = $this->photo_model->update($id,$field);
        if ($result_update==true) {
        	$this->session->set_flashdata('success','Data berhasil di edit');
            if (!$this->generate_json()) {
            	$this->session->set_flashdata('error','Gagal membuat file json');
            }
        }else{
        	$this->session->set_flashdata('error',$result_update);
        }
		redirect('photo/edit/'.$id);
	}
	private function upload_photo()
	{
		$upload_path = BASEDIR.'assets/photo/'.date('Y').'/'.date('m').'/'.date('d');
		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0777, true);
		}
		$config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['overwrite'] = true;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile'))
        {
        	$return = array('status'=>0,'message'=>$this->upload->display_errors());
        }
        else
        {
        	$file_upload = $this->upload->data();
        	$return = array('status'=>1,'message'=>$file_upload);
        	$result_thumb = $this->create_thumb($file_upload['file_name']);
        	if ($result_thumb['status']) {
        		$return['thumb']=true;
        	}else{
        		$return['thumb']=$result_thumb['message'];
        	}
        }
    	return $return;
	}
	private function create_thumb($filename)
	{
		$source_path = BASEDIR.'assets/photo/'.date('Y').'/'.date('m').'/'.date('d').'/'.$filename;
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source_path;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
        $config['overwrite'] = true;
		$config['width'] = 300;
		$config['height'] = 200;
		$this->load->library('image_lib', $config);

		$this->image_lib->resize();		
		if (!$this->image_lib->resize()){
		    $return = array('status'=>0,'message'=>$this->image_lib->display_errors());
		}else{
			$return = array('status'=>1,'message'=>'');
		}
		return $return;
	}
	private function get_field($type='add')
	{
        $data['title'] = $this->input->post('title');
        $data['desc'] = $this->input->post('desc');
        if ($this->input->post('is_gallery')) {            	
        	$data['is_gallery'] = $this->input->post('is_gallery');
        }else{
        	$data['is_gallery'] = 0;
        }
        if ($type=='add') {
	        $data['user_create'] = $this->user_login['id'];
	        $data['date_create'] = date('Y-m-d H:i:s');        	        	
        }else if($type=='edit') {
	        $data['user_update'] = $this->user_login['id'];
	        $data['date_update'] = date('Y-m-d H:i:s');        	
        }
        return $data;
	}
	public function generate_json()
	{
		$this->load->model('photo_model');
		$total = $this->photo_model->count_all();
		$total_page = ceil($total/$this->limit);
		$data_photo = array('total'=>$total);
		$data = array();
		for ($i=0;$i<$total_page;$i++){
			$offset = $i*$this->limit;
			$result = $this->photo_model->get_gallery($this->limit,$offset)->result();
			$data[$i] = $result;
		}
		$data_photo['list'] = $data;
		$json_encode = json_encode($data_photo);
		$upload_path = BASEDIR.'assets/json';
		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0755, true);
		}
		$this->load->helper('file');
		if (!write_file(BASEDIR.'assets/json/photo.json', $json_encode))
		{
		    return false;
		}
		return true;
	}
}