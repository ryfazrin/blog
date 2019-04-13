<?php
	class User_model extends CI_model
	{
    function __construct()
		{
			parent::__construct();
		}

    function getData()
    {
      $this->db->select('*');
      $this->db->from('user');
			$this->db->order_by('id', 'DESC');
      $query = $this->db->get();
			return $query->result();
    }

		function getUserUpdate($id)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('id', $id);
			return $this->db->get()->row();
		}

    function simpan()
    {
      $dateNow = date('Y-m-d');

      $data = array(
        "nama"   => $this->input->post('nama'),
        "username" => $this->input->post('username'),
        "password"   => md5($this->input->post('password')),
        "level" => $this->input->post('level'),
        "tgl_buat" => $dateNow
      );

      $this->db->insert('user', $data);
      return true;
    }

		function update($id)
		{
      if ($this->input->post('password') == "") {
				$data = array(
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'level'=> $this->input->post('level')
				);
			}else {
				$data = array(
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					"password"   => md5($this->input->post('password')),
					'level'=> $this->input->post('level')

				);
			}

			$this->db->where('id', $id);
			$this->db->update('user', $data);
		}

		function delete($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('user');
		}
  }
?>
