
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{

		$this->form_validation->set_rules('r1', 'r1', 'required|trim');
		$this->form_validation->set_rules('r2', 'r2', 'required|trim');

		if ($this->form_validation->run() == false)
		{
			$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();
			$data['q'] = $this->db->query("SELECT * from q")->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$Q1 = $this->db->get_where('user', ['nik' =>$this->session->userdata('nik')])->row_array();
			$data = [
				'r1' => htmlspecialchars($this->input->post('r1', true)),
				'r2' => htmlspecialchars($this->input->post('r2', true)),
				'nik' => $Q1['nik'],
			];


			$this->db->insert('respon', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
					  Berhasil Daftar Akun</div>');
			redirect('user/CSeluruh');

		}
		
	}

	public function CSeluruh()
	{

		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();

		$data['q'] = $this->db->query("SELECT * from q")->row_array();

		$data['jr1'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='positif';")->result();
		$data['jr1n'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Negatif';")->result();
		$data['jr1t'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Netral';")->result();

		$data['jr2'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='positif';")->result();
		$data['jr2n'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Negatif';")->result();
		$data['jr2t'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Netral';")->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/CSeluruh', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function CPt()
	{
		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();

		$data['q'] = $this->db->query("SELECT * from q")->row_array();

		$data['jr1'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='positif' and jenjang = 'Perguruan Tinggi';")->result();
		$data['jr1n'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Negatif' and jenjang = 'Perguruan Tinggi';")->result();
		$data['jr1t'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Netral' and jenjang = 'Perguruan Tinggi';")->result();

		$data['jr2'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='positif' and jenjang = 'Perguruan Tinggi';")->result();
		$data['jr2n'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Negatif' and jenjang = 'Perguruan Tinggi';")->result();
		$data['jr2t'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Netral' and jenjang = 'Perguruan Tinggi';")->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/CPt', $data);
		$this->load->view('templates/footer', $data);

	}

	public function CSma()
	{
		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();

		$data['q'] = $this->db->query("SELECT * from q")->row_array();

		$data['jr1'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='positif' and jenjang = 'SMA / sederajat';")->result();
		$data['jr1n'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Negatif' and jenjang = 'SMA / sederajat';")->result();
		$data['jr1t'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Netral' and jenjang = 'SMA / sederajat';")->result();

		$data['jr2'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='positif' and jenjang = 'SMA / sederajat';")->result();
		$data['jr2n'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Negatif' and jenjang = 'SMA / sederajat';")->result();
		$data['jr2t'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Netral' and jenjang = 'SMA / sederajat';")->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/CSma', $data);
		$this->load->view('templates/footer', $data);
	}

	public function CSmp()
	{
		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();

		$data['q'] = $this->db->query("SELECT * from q")->row_array();

		$data['jr1'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='positif' and jenjang = 'SMP / sederajat';")->result();
		$data['jr1n'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Negatif' and jenjang = 'SMP / sederajat';")->result();
		$data['jr1t'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Netral' and jenjang = 'SMP / sederajat';")->result();

		$data['jr2'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='positif' and jenjang = 'SMP / sederajat';")->result();
		$data['jr2n'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Negatif' and jenjang = 'SMP / sederajat';")->result();
		$data['jr2t'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Netral' and jenjang = 'SMP / sederajat';")->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/CSmp', $data);
		$this->load->view('templates/footer', $data);
	}

	public function CSd()
	{
		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();
		
		$data['q'] = $this->db->query("SELECT * from q")->row_array();

		$data['jr1'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='positif' and jenjang = 'SD / sederajat';")->result();
		$data['jr1n'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Negatif' and jenjang = 'SD / sederajat';")->result();
		$data['jr1t'] = $this->db->query("SELECT  Sentiment FROM v_r1 WHERE Sentiment ='Netral' and jenjang = 'SD / sederajat';")->result();

		$data['jr2'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='positif' and jenjang = 'SD / sederajat';")->result();
		$data['jr2n'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Negatif' and jenjang = 'SD / sederajat';")->result();
		$data['jr2t'] = $this->db->query("SELECT  Sentiment FROM v_r2 WHERE Sentiment ='Netral' and jenjang = 'SD / sederajat';")->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/CSd', $data);
		$this->load->view('templates/footer', $data);
	}


}

?>


<!-- View sentimen -->

<!--
CREATE VIEW V_r1 AS 
SELECT respon.r1 AS Respon1, user.nama, institusi.nama AS jenjang,
(
			CASE 
				WHEN r1 LIKE '%suka%' THEN 'Positif'
				WHEN r1 LIKE '%senang%' THEN 'Positif'
				WHEN r1 LIKE '%bahagia%' THEN 'Positif'
				WHEN r1 LIKE '%jijik%' THEN 'Negatif'
				WHEN r1 LIKE '%benci%' THEN 'Negatif'
				WHEN r1 LIKE '%laknat%' THEN 'Negatif'
				WHEN r1 LIKE '%biasa%' THEN 'Netral'
				WHEN r1 LIKE '%suport%' THEN 'Netral'
			END)AS Sentiment
FROM  respon
JOIN user
ON user.nik = respon.nik
JOIN institusi
ON institusi.id_institusi = user.id_institusi


CREATE VIEW V_r2 AS 
SELECT respon.r2 AS Respon2, user.nama, institusi.nama AS jenjang,
(
			CASE 
				WHEN r2 LIKE '%suka%' THEN 'Positif'
				WHEN r2 LIKE '%senang%' THEN 'Positif'
				WHEN r2 LIKE '%bahagia%' THEN 'Positif'
				WHEN r2 LIKE '%jijik%' THEN 'Negatif'
				WHEN r2 LIKE '%benci%' THEN 'Negatif'
				WHEN r2 LIKE '%laknat%' THEN 'Negatif'
				WHEN r2 LIKE '%biasa%' THEN 'Netral'
				WHEN r2 LIKE '%suport%' THEN 'Netral'
			END)AS Sentiment
FROM  respon
JOIN user
ON user.nik = respon.nik
JOIN institusi
ON institusi.id_institusi = user.id_institusi

-->







