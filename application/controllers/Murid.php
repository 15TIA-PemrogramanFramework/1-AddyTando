<?php 
/**
* 
*/
class Murid extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Murid_Model');
		$this->load->model('Sekolah_Model');
		$this->load->model('Wali_Model');
		if($this->session->userdata('logged_in'))
		{
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}
	function index()
	{
			$data['murid'] = $this->Murid_Model->ambil_data();
			$this->load->view('murid/murid_list', $data);
	}

	function tambah_data()
	{
		$data = array(
			'nisn_murid' => set_value('nisn_murid'),
			'nama_murid' => set_value('nama_murid'),
			'alamat_murid' => set_value('alamat_murid'),
			'angkatan' => set_value('angkatan'),
			'sekolah' => $this->Sekolah_Model->ambil_data(),
			'wali' => $this->Wali_Model->ambil_data(),
			'button' => 'Tambah',
			'action' => site_url('murid/tambah_aksi')
			);
		$this->load->view('murid/murid_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nisn_murid' => $this->input->post('nisn_murid'),
			'nama_murid' => $this->input->post('nama_murid'),
			'alamat_murid' => $this->input->post('alamat_murid'),
			'angkatan' => $this->input->post('angkatan'),
			'id_sekolah' => $this->input->post('id_sekolah'),
			'id_wali' => $this->input->post('id_wali'),
			);
		$this->Murid_Model->tambah_data($data);
		redirect(site_url('murid'));
	}

	function delete($id)
	{
		$this->Murid_Model->hapus_data($id);
		redirect(site_url('murid'));
	}

	function edit($id)
	{
		$murid=($this->Murid_Model->ambil_data_id($id));
		$data = array(
			'nama_murid' => set_value('nama_murid',$murid->nama_murid),
			'alamat_murid' => set_value('alamat_murid',$murid->alamat_murid),
			'angkatan' => set_value('angkatan',$murid->angkatan),
			'nisn_murid' => set_value('nisn_murid',$murid->nisn_murid),
			'sekolah' => $this->Sekolah_Model->ambil_data(),
			'wali' => $this->Wali_Model->ambil_data(),
			'button' => 'Simpan',
			'action' => site_url('murid/edit_aksi')
			);
		$this->load->view('murid/murid_form', $data);
	}

	function edit_aksi()
	{
		$data = array(

			'nama_murid' => $this->input->post('nama_murid'),
			'alamat_murid' => $this->input->post('alamat_murid'),
			'angkatan' => $this->input->post('angkatan'),
			'id_sekolah' => $this->input->post('id_sekolah'),
			'id_wali' => $this->input->post('id_wali'),
			);
		$nisn_murid = $this->input->post('nisn_murid');
		$this->Murid_Model->edit_data($nisn_murid,$data);
		redirect(site_url('murid'));
	}
}
?>