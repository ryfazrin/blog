<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends ADM_Controller {
	public function __construct()
	{
		parent::__construct();
    $this->load->model('user_model');
    // jika tidak ada status login maka alihkan ke login form
		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		}
    // jika level bukan administrator maka kembalikan ke Dashboard
    if ($this->session->userdata('level') != 'administrator') {
      redirect(base_url());
    }
	}

  public function index()
  {
		$data['users'] = $this->user_model->getData();
		$this->pages('user/userList', $data);
	}

	public function tambah()
  {
		$this->pages('user/userForm');
  }

	public function simpan()
  {
    if ($this->user_model->simpan()) {
			$data['info']  = '
      <div class="alert alert-success"><p><strong>Berhasil Membuat User</strong></p></div>';
		}else{
			$data['info']  = '
					<div class="alert alert-danger"><p><strong> Gagal Membuat User!</strong></p></div>';
		}
		$this->pages('user/userForm', $data);
  }

	public function ubah($id)
	{
		$data['userId'] = $this->user_model->getUserUpdate($id);
		$this->pages('user/userForm', $data);
	}

	public function update($id)
	{
		$this->user_model->update($id);

		$data['userId'] = $this->user_model->getUserUpdate($id);
		$data['info']  = '
					<div class="alert alert-success"><p><strong>Update id user '.$id.' Berhasil</strong></p></div>';
		$this->pages('user/userForm', $data);
	}

	public function hapus($id)
	{
		$this->user_model->delete($id);
		redirect(site_url('user?status=deleted'));
	}
}
