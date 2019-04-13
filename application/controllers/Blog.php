<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
    $this->load->model('blog_model');
	}

	public function index()
	{
		$data['posts'] = $this->blog_model->getPosts();
		$this->pages('welcome', $data);
	}

	public function semuaPost()
	{
		$data['posts'] = $this->blog_model->getAllPosts();
		$data['semua'] = true;
		$this->pages('welcome', $data);
	}

	public function post($slug)
	{
		$data['post'] = $this->blog_model->getPostBySlug($slug);
		$this->pages('single_post', $data);
	}
}
