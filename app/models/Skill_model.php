<?php

/**
 * 
 */
class Skill_model
{
	private $table = 'skill';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllSkills() 
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getSkillById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE skill_id=:id');
		$this->db->bind('id', $id);

		return $this->db->single();
	}

	public function getHeroesOfTheSkill($id)
	{
		$this->db->query('SELECT * FROM matching_superhero_skill INNER JOIN superhero ON matching_superhero_skill.superhero_id = superhero.superhero_id AND skill_id=:id');
		$this->db->bind('id', $id);

		return $this->db->resultSet();
	}

	public function findSkills()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM ". $this->table ." WHERE skill_name LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

	// public function tambahDataMahasiswa($data)
	// {
	// 	$query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)";

	// 	$this->db->query($query);
	// 	$this->db->bind('nama', $data['nama']);
	// 	$this->db->bind('nrp', $data['nrp']);
	// 	$this->db->bind('email', $data['email']);
	// 	$this->db->bind('jurusan', $data['jurusan']);

	// 	$this->db->execute();
		
	// 	return $this->db->rowCount();
	// }
	
	// public function hapusDataMahasiswa($id)
	// {
	// 	$query = "DELETE FROM mahasiswa WHERE id = :id";

	// 	$this->db->query($query);
	// 	$this->db->bind('id', $id);
	// 	$this->db->execute();
		
	// 	return $this->db->rowCount();
	// }

	// public function ubahDataMahasiswa($data)
	// {
	// 	$query = "UPDATE mahasiswa SET 
	// 			nama = :nama,
	// 			nrp = :nrp,
	// 			email = :email,
	// 			jurusan = :jurusan
	// 			WHERE id = :id";

	// 	$this->db->query($query);
	// 	$this->db->bind('nama', $data['nama']);
	// 	$this->db->bind('nrp', $data['nrp']);
	// 	$this->db->bind('email', $data['email']);
	// 	$this->db->bind('jurusan', $data['jurusan']);
	// 	$this->db->bind('id', $data['id']);

	// 	$this->db->execute();
		
	// 	return $this->db->rowCount();
	// }

	
}