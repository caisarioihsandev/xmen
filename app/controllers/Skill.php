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

	public function tambah()
	{
		if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASE_URL . '/mahasiswa');
			exit();
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASE_URL . '/mahasiswa');
			exit();
		}
	}

	public function hapus($id)
	{
		if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASE_URL . '/mahasiswa');
			exit();
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASE_URL . '/mahasiswa');
			exit();
		}
	}

	public function	getubah() 
	{
		// mengubah data array assosiatif ke bentuk json
		echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
	}

	public function ubah() 
	{
		if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: ' . BASE_URL . '/mahasiswa');
			exit();
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: ' . BASE_URL . '/mahasiswa');
			exit();
		}
	}
}