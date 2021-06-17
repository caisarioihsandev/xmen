<?php

/**
 * 
 */
class Skill extends Main_Controller
{
	public function index()
	{
		$data['judul'] 	= 'X-MEN';
		$data['subjudul'] 	= 'Daftar Skill';
		$data['skills'] = $this->model('Skill_model')->getAllSkills();

		$this->view('templates/header', $data);
		$this->view('skill/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] 	= 'X-MEN';
		$data['skill'] 	= $this->model('Skill_model')->getSkillById($id);
		$data['heroes'] = $this->model('Superhero_model')->getAllHeroes();
		$data['herofromskill'] = $this->model('Skill_model')->getHeroesOfTheSkill($id);
		
		$this->view('templates/header', $data);
		$this->view('skill/detail', $data);
		$this->view('templates/footer');
	}

	public function find() 
	{
		$data['judul'] 	= 'X-MEN';
		$data['subjudul'] = 'Daftar Skill';

		$data['skills'] = $this->model('Skill_model')->findSkills();

		$this->view('templates/header', $data);
		$this->view('skill/index', $data);
		$this->view('templates/footer');
	}

	public function addhero() 
	{
		if ($this->model('Skill_model')->addHeroToSkill($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASE_URL . '/skill');
			exit();
		} else {
			Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
			header('Location: ' . BASE_URL . '/skill');
			exit();
		}
	}

	public function change() 
	{
		if ($this->model('Skill_model')->updateSkill($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: ' . BASE_URL . '/skill');
			exit();
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: ' . BASE_URL . '/skill');
			exit();
		}
	}

	public function remove($id)
	{
		if ($this->model('Skill_model')->removeSkill($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASE_URL . '/skill');
			exit();
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASE_URL . '/skill');
			exit();
		}
	}
}