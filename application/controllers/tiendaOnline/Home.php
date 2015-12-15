<?php
	class Home extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			
		}

		public function index(){
			// Header setup
			$this->load->model("persistencia/Category_model", "menu");
			// la información está disponible en la vista a través del elemento
			// "elementos" que se guarda en el array "multi_menu" que está disponible
			// globalmente.
			$elementos = $this->menu->all();
			$this->multi_menu->set_items($elementos);		
			// End Header setup

			// Content page setup
			$data = array();
			$this->load->model("persistencia/Manufacturer_model", "manufacturers");
			$this->load->model("persistencia/Product_model", "products");
			$data['manufacturers'] = $this->manufacturers->all();
			$data['products'] = $this->products->topRated();
			// la información recuperada de la BBDD se pasa a la vista mediante un
			// array, "data" en este caso.
			//End Content page setup

			// load Header View
			$this->load->view('vistasTienda/Header');
			// load page Content View
			$this->load->view('vistasTienda/ViewTienda', $data);
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function _remap($method, $params = array()){
			if ( function_exists($method)){
				return call_user_func_array(array($this, $method), $params);
			} else {
				$this->index();
			}
		}
	}
?>