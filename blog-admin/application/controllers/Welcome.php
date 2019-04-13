<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends ADM_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model');
		if (!$this->session->userdata('username')) {
			redirect('login');
		}
	}
	public function index()
	{
		$data['admins'] = $this->welcome_model->admin_rows();
		$data['penulis'] = $this->welcome_model->penulis_rows();
		$data['posts'] = $this->welcome_model->post_rows();
		$this->pages('welcome', $data);
	}
}
