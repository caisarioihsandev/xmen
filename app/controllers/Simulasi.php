<?php

/**
 * 
 */
class Simulasi extends Main_Controller
{
	public function index($nama = 'Ihsan', $pekerjaan = 'Pegawai' , $umur = 29) 
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About';

		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page() 
	{
		$data['judul'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}