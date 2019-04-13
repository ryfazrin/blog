<?php
	class Post_model extends CI_model
	{
    function __construct()
		{
			parent::__construct();
		}

    function seo_title($s) {
      $c = array (' ');
      $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
      $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d

      $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
      return $s;
    }

    function getData()
    {
      $this->db->select('*');
      $this->db->from('post');
      $this->db->join('user', 'post.id_penulis = user.id');
			$this->db->where('status_delete', '0');
			$this->db->order_by('id_post', 'DESC');
      $query = $this->db->get();
			return $query->result();
    }

		// function getDataWherePenulis($uname)
    // {
    //   $this->db->select('*');
    //   $this->db->from('post');
    //   $this->db->join('user', 'post.id_penulis = user.id');
		// 	$this->db->where(array(
		// 		'user.username' => $uname,
		// 		'status_delete' => '0'
		// 	));
		// 	$this->db->order_by('id_post', 'DESC');
    //   $query = $this->db->get();
		// 	return $query->result();
    // }

		function getPostUpdate($id)
		{
			$this->db->select('*');
			$this->db->from('post');
			$this->db->join('user', 'post.id_penulis = user.id');
			$this->db->where('post.id_post', $id);
			return $this->db->get()->row();
		}

    function simpan()
    {
      $slug = $this->seo_title($this->input->post('judul'));
      $dateNow = date('Y-m-d');

			$data = array(
        "id_penulis" => $this->input->post('id_penulis'),
				"judul"   => $this->input->post('judul'),
				"isi" => $this->input->post('isi'),
				"seo_url"   => $slug,
        "tgl_publish" => $dateNow
			);

			$this->db->insert('post', $data);
			return true;
    }

		function update($id)
		{
			$slug = $this->seo_title($this->input->post('judul'));
      $dateNow = date('Y-m-d');

			$data = array(
        "id_penulis" => $this->input->post('id_penulis'),
				"judul"   => $this->input->post('judul'),
				"isi" => $this->input->post('isi'),
				"seo_url"   => $slug,
        "tgl_publish" => $dateNow
			);

			$this->db->where('id_post', $id);
			$this->db->update('post', $data);
		}

		function delete($id)
		{
			$data = array(
				"status_delete" => '1',
			);

			$this->db->where('id_post', $id);
			$this->db->update('post', $data);
		}
  }
?>
