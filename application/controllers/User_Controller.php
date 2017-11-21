<?php 
/**
* 
*/
class User_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
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
			$data['user'] = $this->User->ambil_data();
			$this->load->view('user/user_list', $data);		
	}

	function tambah_data()
	{
		$data = array(
			'username' => set_value('username'),
			'password' => set_value('password'),
			'status' => set_value('status'),
			'button' => 'Tambah',
			'tambah' => true,
			'action' => site_url('user_controller/tambah_aksi')
			);
		$this->load->view('user/user_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'status' => $this->input->post('status'),
			);
		$this->User->tambah_data($data);
		redirect(site_url('user_controller'));
	}

	function delete($id)
	{
		$this->User->hapus_data($id);
		redirect(site_url('user_controller'));
	}

	function edit($id)
	{
		$user=($this->User->ambil_data_id($id));
		$data = array(
			'username' => set_value('username',$user->username),
			'password' => set_value('password',$user->password),
			'status' => set_value('status',$user->status),
			'button' => 'Simpan',
			'tambah' => false,
			'action' => site_url('user_controller/edit_aksi')
			);
		$this->load->view('user/user_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'password' => $this->input->post('password'),
			'status' => $this->input->post('status'),
			);
		$username = $this->input->post('username');
		$this->User->edit_data($username,$data);
		redirect(site_url('user_controller'));
	}
}
?>