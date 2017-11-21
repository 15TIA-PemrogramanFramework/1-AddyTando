<?php
/**
 * 
 */
class User extends CI_Model
{

	public $nama_table = 'user';
	public $id = 'username';
 	public $order = 'ASC';

	function ambil_data()
	{
		$data['user'] = $this->db->order_by($this->id, $this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table, $data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->nama_table);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->nama_table,$data);
	}

	function ubah_pass($id,$password)
	{
 		//$a = "awa";
 		//$ubah = array('password' => $password);
		$this->db->set('password', $password);
		$this->db->where($this->id, $id);
		$this->db->update($this->nama_table);
	}

	function login($username, $password)
	{
		$this->db->select('username, password, status');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
} 
?>