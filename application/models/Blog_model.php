<?php
	class Blog_model extends CI_model
	{
    function __construct()
		{
			parent::__construct();
		}

    function getPosts()
    {
      $this->db->select('*');
      $this->db->from('post');
      $this->db->join('user', 'post.id_penulis = user.id');
      $this->db->limit('7');
			$this->db->where('status_delete', '0');
      $this->db->order_by('id_post', 'DESC');
      $query = $this->db->get();
			return $query->result();
    }

    function getAllPosts()
    {
      $this->db->select('*');
      $this->db->from('post');
      $this->db->join('user', 'post.id_penulis = user.id');
			$this->db->where('status_delete', '0');
      $this->db->order_by('id_post', 'DESC');
      $query = $this->db->get();
			return $query->result();
    }

    function getPostBySlug($slug)
		{
      $this->db->select('*');
      $this->db->from('post');
      $this->db->join('user', 'post.id_penulis = user.id');
			$this->db->where('post.seo_url', $slug);
			return $this->db->get()->row();
		}
  }
