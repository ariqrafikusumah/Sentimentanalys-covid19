<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{ 
		$this->form_validation->set_rules('nik', 'Nik', "trim|required");
		$this->form_validation->set_rules('password', 'Password', "trim|required");

		if ($this->form_validation->run() == false)
		{ 
			$this->load->view('templates/auth_header');
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		}else{
			$this->_login();
		}
		
	}


	private function _login()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['nik' => $nik])->row_array();

		if ($user) {

			// harusnya password_verify(password, hash) karena pwmasih ditambahkan manual belum melalui registrasi
			if ($password == $user['password']) {
				$data = [
					'nik' => $user['nik'],
					'role_id' => $user['role_id']
				];

				$this->session->set_userdata($data);
				if ($user['role_id'] == 1) {
					redirect('admin');
				} else {
					redirect('user');
				}
				

			} else{

				$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">
					  Password salah</div>');
				redirect('auth');
			}
			# user ada
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">
					  Nik Belum Terdaftar</div>');
			redirect('auth');
		}
	}

	public function registrasi()
	{

		
		//|is_unique[user.nik]
		//|is_unique[user.email]
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('id_jk', 'Jk', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('id_institusi', 'institusi', 'required');
		$this->form_validation->set_rules('asal_institusi', 'Asal_institusi', 'required');
		$this->form_validation->set_rules('id_agama', 'agama', 'required');
		$this->form_validation->set_rules('id_pekerjaan', 'pekerjaan', 'required');
		$this->form_validation->set_rules('id_provider', 'provider', 'required');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
			'matches' => 'Password tidak sama !',
			'min_length' => 'Password terlalu singkat !'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


		if ($this->form_validation->run() == false)
		{
			$data['lio'] = $this->db->query("SELECT * from jk")->result();
			$data['jang'] = $this->db->query("SELECT * from institusi")->result();
			$data['yor'] = $this->db->query("SELECT * from asal_i")->result();
			$data['yop'] = $this->db->query("SELECT * from agama")->result();
			$data['jil'] = $this->db->query("SELECT * from pekerjaan")->result();
			$data['ryo'] = $this->db->query("SELECT * from provider")->result();
			$this->load->view('templates/auth_header');
			$this->load->view('auth/registrasi', $data);
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'id_jk' => htmlspecialchars($this->input->post('id_jk', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'id_institusi' => htmlspecialchars($this->input->post('id_institusi', true)),
				'asal_institusi' => htmlspecialchars($this->input->post('asal_institusi', true)),
				'id_agama' => htmlspecialchars($this->input->post('id_agama', true)),
				'id_pekerjaan' => htmlspecialchars($this->input->post('id_pekerjaan', true)),
				'id_provider' => htmlspecialchars($this->input->post('id_provider', true)),
				'password' => htmlspecialchars($this->input->post('password1', true)),
				'role_id' => 2 ,
				'data_created' => time()
			];


			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
					  Berhasil Daftar Akun</div>');
			redirect('auth');

		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
					  Anda berhasil logout</div>');
		redirect('auth');
	}
}