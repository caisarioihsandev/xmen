<?php

/**
 * 
 */
class Superhero extends Main_Controller
{
	public function index() 
	{
		$data['judul'] 	= 'X-MEN';
		$data['subjudul'] = 'Daftar Superhero';
		$data['heroes'] = $this->model('Superhero_model')->getAllHeroes();

		$this->view('templates/header', $data);
		$this->view('superhero/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] 	= 'X-MEN';
		$data['hero'] 	= $this->model('Superhero_model')->getHeroById($id);
		$data['heroskills'] = $this->model('Superhero_model')->getHeroSkills($id);
		
		$this->view('templates/header', $data);
		$this->view('superhero/detail', $data);
		$this->view('templates/footer');
	}

	public function find() 
	{
		$data['judul'] 	= 'X-MEN';
		$data['subjudul'] = 'Daftar Superhero';
		$data['heroes']	= $this->model('Superhero_model')->findHeroes();

		$this->view('templates/header', $data);
		$this->view('superhero/index', $data);
		$this->view('templates/footer');
	}

	
}