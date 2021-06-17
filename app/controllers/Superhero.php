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
		$data['skills'] = $this->model('Skill_model')->getAllSkills();
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

	public function change() 
	{
		if ($this->model('Superhero_model')->updateHero($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: ' . BASE_URL . '/superhero');
			exit();
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: ' . BASE_URL . '/superhero');
			exit();
		}
	}

	public function addskill() 
	{
		if ($this->model('Superhero_model')->addSkillHero($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASE_URL . '/superhero');
			exit();
		} else {
			Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
			header('Location: ' . BASE_URL . '/superhero');
			exit();
		}
	}

	public function remove($id)
	{
		if ($this->model('Superhero_model')->removeHero($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASE_URL . '/superhero');
			exit();
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASE_URL . '/superhero');
			exit();
		}
	}
}