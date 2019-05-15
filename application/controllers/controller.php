<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function index() {

		$this->load->view('f-login');
	}


	public function login() {
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$cek = $this->model->proseslogin($username,$password);
		$hasil= count($cek);
		if($hasil > 0) {
			$select = $this->db->get_where('user', array('username' => $username,'password' => $password))->row();
			$data = array('logged_in' => true,'loger' => $select->username);
			$this->session->set_userdata($data);
			redirect('controller/depan');
		}else{
			$this->session->set_flashdata('err','username and password salah');
			redirect('controller/index');
		}
	}
	public function depan() {
		
		$this->load->view('awal');
	}

	public function utama() {
		$this->data['hasil'] = $this->model->tampil('post');
		$this->load->view('view_blog',$this->data);
	}

	public function form_input() {
		$this->load->view('f-input');
	}

	public function insert() {
		$title = $_POST['title'];
		$isi = $_POST['isi'];
		$data = array('title'=>$title, 'isi'=>$isi);
		$add = $this->model->tambah('post',$data);
		if($add > 0){
			redirect('controller/utama');
		}else{
			echo 'gagal';
		}
	}

	public function delete($id) {
	$hapus = $this->model->del('post',$id);
	if($hapus > 0){
			redirect('controller/utama');
		}else{
			echo 'gagal';
		}
	}

	public function form_edit($id) {
		$this->data['dataEdit'] = $this->model->dataEdit('post',$id);
		$this->load->view('f_edit', $this->data);
	}

	public function update($id) {
		$title = $_POST['title'];
		$isi = $_POST['isi'];
		$data = array('title'=>$title, 'isi'=>$isi);
		$edit = $this->model->edit('post',$data,$id);
		if($edit > 0){
			redirect('controller/utama');
		}else{
			echo 'gagal';
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('controller/index');
	}
}
