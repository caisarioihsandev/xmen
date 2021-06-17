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

	public function addHeroToSkill($data)
	{
		$query = "INSERT INTO matching_superhero_skill (superhero_id, skill_id) VALUES (:hero, :id)";

		$this->db->query($query);
		$this->db->bind('hero', $data['hero']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();
		
		return $this->db->rowCount();
	}

	public function updateSkill($data)
	{
		$query = "UPDATE skill SET 
				skill_name = :name
				WHERE skill_id = :id";


		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();
		
		return $this->db->rowCount();
	}
	
	public function removeSkill($id)
	{
		$query = "DELETE FROM " . $this->table . " WHERE skill_id = :id";

		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		
		return $this->db->rowCount();
	}	
}