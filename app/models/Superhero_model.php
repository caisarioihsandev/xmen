<?php

/**
 * 
 */
class Superhero_model
{
	private $table = 'superhero';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllHeroes() 
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getHeroById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE superhero_id=:id');
		$this->db->bind('id', $id);

		return $this->db->single();
	}

	public function getHeroSkills($id)
	{
		$this->db->query('SELECT * FROM matching_superhero_skill INNER JOIN skill ON matching_superhero_skill.skill_id = skill.skill_id AND superhero_id=:id');
		$this->db->bind('id', $id);

		return $this->db->resultSet();
	}

	public function findHeroes()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM ". $this->table ." WHERE superhero_name LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}
}