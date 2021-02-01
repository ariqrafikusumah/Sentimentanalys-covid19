<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function index()
	{
		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();
		$data['uspro'] = $this->db->query("SELECT * from uspro")->result();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function sentiment1()
	{
		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();
		$data['uspro'] = $this->db->query("SELECT * from uspro")->result();

			$data['R1'] = $this->db-> query("SELECT *,(
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
			FROM respon;")->result();

			$data['R2'] = $this->db-> query("SELECT *,(
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
			FROM respon;")->result();
					
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/s1', $data);
		$this->load->view('templates/footer', $data);
	}

	public function sentiment2()
	{
		$data['logus'] = $this->db->get_where('pro', ['nik' =>$this->session->userdata('nik')])->row_array();
		$data['uspro'] = $this->db->query("SELECT * from uspro")->result();

		$data['R2'] = $this->db-> query("SELECT *,(
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
			FROM respon;")->result();
					
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/s2', $data);
		$this->load->view('templates/footer', $data);


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
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/CSeluruh', $data);
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
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/CPt', $data);
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
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/CSma', $data);
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
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/CSmp', $data);
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
		$this->load->view('templates/sidebar_A', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/CSd', $data);
		$this->load->view('templates/footer', $data);
	}





}
