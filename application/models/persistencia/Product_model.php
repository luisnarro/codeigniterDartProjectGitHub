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

	    public function all()
		{
			return $this->db->get("st_product")->result_array();
		}

		public function topRated()
		{
			$query = $this->db->query('SELECT * FROM st_product ORDER BY points DESC LIMIT 6');
			return $query->result();
		}

		public function allByCategory($categoryId, $limit, $offset)
		{
			$sql = "SELECT p.* FROM st_product p, st_product_to_category pc WHERE p.product_id = pc.product_id AND pc.category_id = ? ORDER BY points DESC";
			$query = $this->db->query($sql, array($categoryId));
			return array_slice($query->result(), $offset, $limit);
		}

		public function countProductsByCategory($categoryId)
		{
			$sql = "SELECT COUNT(*) AS number FROM st_product p, st_product_to_category pc WHERE p.product_id = pc.product_id AND pc.category_id = ?";
			$query = $this->db->query($sql, array($categoryId));
			return $query->result()[0]->number;
		}

		public function getProduct($productId)
		{
			$sql = "SELECT * FROM st_product WHERE product_id = ?";
			$query = $this->db->query($sql, array($productId));
			return $query->result()[0];
		}

	}
?>