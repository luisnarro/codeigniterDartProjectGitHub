<?php 
	class Product_model extends CI_Model {

	    public $title;
	    public $content;
	    public $date;

	    public function __construct()
	    {
	            // Call the CI_Model constructor
	            parent::__construct();
	    }

	    public function consultaPrueba()
	    {
	    	$query = $this->db->query('SELECT * FROM st_product');
	    	return $query->result();
	    }

	    public function all()
		{
			return $this->db->get("st_product")->result_array();
		}

		public function topRated()
		{
			$query = $this->db->query('SELECT * FROM st_product ORDER BY points DESC LIMIT 6');
			return $query->result();
		}

		}
?>