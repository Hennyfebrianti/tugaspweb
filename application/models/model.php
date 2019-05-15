<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function proseslogin($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('user')->row();
	}


	public function tampil($table_name)
	{
		$tampil= $this->db->get($table_name);
		return $tampil->result_array(); 
	}
	public function tambah($table_name,$data)
	{
		$add = $this->db->insert($table_name,$data);
		return $add;
	}

	public function edit($table_name,$data,$id)
	{
		$this->db->where('id_post',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	public function del($table_name,$id)
	{
		$this->db->where('id_post',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}

	public function dataEdit($table_name,$id)
	{
		$this->db->where('id_post',$id);
		$tampil= $this->db->get($table_name);
		return $tampil->row(); 
	}
}
