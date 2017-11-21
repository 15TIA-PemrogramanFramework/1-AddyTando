<?php 
/**
* 
*/
class Wali extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
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
			$data['wali'] = $this->Wali_Model->ambil_data();
			$this->load->view('wali/wali_list', $data);		
	}

	function tambah_data()
	{
		$data = array(
			'id_wali' => set_value('id_wali'),
			'nama_wali' => set_value('nama_wali'),
			'alamat_wali' => set_value('alamat_wali'),
			'nohp_wali' => set_value('nohp_wali'),
			'button' => 'Tambah',
			'action' => site_url('wali/tambah_aksi')
			);
		$this->load->view('wali/wali_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_wali' => $this->input->post('nama_wali'),
			'alamat_wali' => $this->input->post('alamat_wali'),
			'nohp_wali' => $this->input->post('nohp_wali'),
			);
		$this->Wali_Model->tambah_data($data);
		redirect(site_url('wali'));
	}

	function delete($id)
	{
		$this->Wali_Model->hapus_data($id);
		redirect(site_url('wali'));
	}

	function edit($id)
	{
		$wali=($this->Wali_Model->ambil_data_id($id));
		$data = array(
			'id_wali' => set_value('id_wali',$wali->id_wali),
			'nama_wali' => set_value('nama_wali',$wali->nama_wali),
			'alamat_wali' => set_value('alamat_wali',$wali->alamat_wali),
			'nohp_wali' => set_value('nohp_wali',$wali->nohp_wali),
			'button' => 'Simpan',
			'action' => site_url('wali/edit_aksi')
			);
		$this->load->view('wali/wali_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'nama_wali' => $this->input->post('nama_wali'),
			'alamat_wali' => $this->input->post('alamat_wali'),
			'nohp_wali' => $this->input->post('nohp_wali'),
			);
		$id_wali = $this->input->post('id_wali');
		$this->Wali_Model->edit_data($id_wali,$data);
		redirect(site_url('wali'));
	}
}
?>