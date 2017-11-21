<?php 
/**
* 
*/
class Sekolah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Sekolah_Model');
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
			$data['sekolah'] = $this->Sekolah_Model->ambil_data();
			$this->load->view('sekolah/sekolah_list', $data);		
	}

	function tambah_data()
	{
		$data = array(
			'id_sekolah' => set_value('id_sekolah'),
			'nama_sekolah' => set_value('nama_sekolah'),
			'alamat_sekolah' => set_value('alamat_sekolah'),
			'tingkat_sekolah' => set_value('tingkat_sekolah'),
			'button' => 'Tambah',
			'action' => site_url('sekolah/tambah_aksi')
			);
		$this->load->view('sekolah/sekolah_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat_sekolah' => $this->input->post('alamat_sekolah'),
			'tingkat_sekolah' => $this->input->post('tingkat_sekolah'),
			);
		$this->Sekolah_Model->tambah_data($data);
		redirect(site_url('sekolah'));
	}

	function delete($id)
	{
		$this->Sekolah_Model->hapus_data($id);
		redirect(site_url('sekolah'));
	}

	function edit($id)
	{
		$sekolah=($this->Sekolah_Model->ambil_data_id($id));
		$data = array(
			'id_sekolah' => set_value('id_sekolah',$sekolah->id_sekolah),
			'nama_sekolah' => set_value('nama_sekolah',$sekolah->nama_sekolah),
			'alamat_sekolah' => set_value('alamat_sekolah',$sekolah->alamat_sekolah),
			'tingkat_sekolah' => set_value('tingkat_sekolah',$sekolah->tingkat_sekolah),
			'button' => 'Simpan',
			'action' => site_url('sekolah/edit_aksi')
			);
		$this->load->view('sekolah/sekolah_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat_sekolah' => $this->input->post('alamat_sekolah'),
			'tingkat_sekolah' => $this->input->post('tingkat_sekolah'),
			);
		$id_sekolah = $this->input->post('id_sekolah');
		$this->Sekolah_Model->edit_data($id_sekolah,$data);
		redirect(site_url('sekolah'));
	}
}
?>