<?php

/**
 * 
 */
class Simulasi extends Main_Controller
{
	public function index() 
	{
		$data['judul'] 	= 'X-MEN';
		$data['subjudul'] = 'Simulasi Jika Superhero Menikah';
		$data['heroes'] = $this->model('Superhero_model')->getAllHeroes();

		$this->view('templates/header', $data);
		$this->view('simulasi/index', $data);
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