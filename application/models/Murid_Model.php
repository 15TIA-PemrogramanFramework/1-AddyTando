<?php
/**
 * 
 */
 class Murid_Model extends CI_Model
 {
 	public $nama_table = 'murid';
	public $id = 'nisn_murid';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('m.nisn_murid, m.nama_murid, m.alamat_murid, m.angkatan, s.tingkat_sekolah, s.nama_sekolah, w.nama_wali');
 		$this->db->from('murid m');
 		$this->db->join('sekolah s', 's.id_sekolah = m.id_sekolah');
 		$this->db->join('wali w', 'w.id_wali = m.id_wali');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
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
 } 
 ?>