<?php
class Category_model extends CI_Model {

	 public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }

	public function all()
	{
		return $this->db->get("st_category")->result_array();
	}

	public function getLeafs($limit, $offset)
	{
		$query = $this->db->query('SELECT * FROM st_category WHERE isLeaf=1');
		return array_slice($query->result(), $offset, $limit);
	}

	public function countLeafs()
	{
		$query = $this->db->query('SELECT count(*) AS number FROM st_category WHERE isLeaf=1');
		return $query->result()[0]->number;
	}
}