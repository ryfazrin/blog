<?php
	class Welcome_model extends CI_model
	{

		function __construct()
		{
			parent::__construct();
		}

		function admin_rows()
		{
      $this->db->where('level', 'administrator');
			$query = $this->db->get('user');
			return $query->num_rows();
		}

    function penulis_rows()
		{
      $this->db->where('level', 'penulis');
			$query = $this->db->get('user');
			return $query->num_rows();
		}

		function post_rows()
		{
      $this->db->where('status_delete', '0');
			$query = $this->db->get('post');
			return $query->num_rows();
		}
	}
 ?>
