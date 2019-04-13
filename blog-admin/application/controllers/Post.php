<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends ADM_Controller {
	public function __construct()
	{
		parent::__construct();
    $this->load->model('post_model');
		// jika tidak ada status login maka alihkan ke login form
		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		}
	}

  public function index()
  {
		// if ($this->session->userdata('level') == 'penulis') {
		// 	$data['posts'] = $this->post_model->getDataWherePenulis($this->session->userdata('username'));
		// }else {
		$data['posts'] = $this->post_model->getData();
		// }
		$this->pages('post/postList', $data);
  }

  public function tambah()
  {
		$this->pages('post/postForm');
  }

  public function simpan()
  {
    // echo $this->input->post('id_penulis')."<br>".$this->input->post('judul')."<br>".$this->input->post('isi');
    if ($this->post_model->simpan()) {
			$data['info']  = '
      <div class="alert alert-success"><p><strong>Berhasil Membuat Post</strong></p></div>';
		}else{
			$data['info']  = '
					<div class="alert alert-danger"><p><strong> Gagal Membuat Post!</strong></p></div>';
		}
		$this->pages('post/postForm', $data);
  }

	public function ubah($id)
	{
		$data['postId'] = $this->post_model->getPostUpdate($id);
		$this->pages('post/postForm', $data);
	}

	public function update($id)
	{
		$this->post_model->update($id);

		$data['postId'] = $this->post_model->getPostUpdate($id);
		$data['info']  = '
					<div class="alert alert-success"><p><strong>Update id post '.$id.' Berhasil</strong></p></div>';
		$this->pages('post/postForm', $data);
	}

	public function hapus($id)
	{
		// jika level bukan administrator maka kembalikan ke halaman utama post
    if ($this->session->userdata('level') != 'administrator') {
      redirect(base_url('/post'));
    }
		$this->post_model->delete($id);
		redirect(site_url('post?status=deleted'));
	}
}
