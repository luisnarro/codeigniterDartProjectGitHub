<?php 
	class modeloPrueba extends CI_Model {

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

	}
?>