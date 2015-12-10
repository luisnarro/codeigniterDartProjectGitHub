<?php
	require_once(APPPATH.'controllers/dominio/ObjetoPrueba.php');

	class Home extends CI_Controller{
		public function index(){
			// Header setup
			$this->load->model("persistencia/menu_model", "menu");
			// la información está disponible en la vista a través del elemento
			// "elementos" que se guarda en el array "multi_menu" que está disponible
			// globalmente.
			$elementos = $this->menu->all();
			$this->multi_menu->set_items($elementos);			
			// End Header setup

			// Content page setup
			//$datos = array ();
			//$this->load->model('persistencia/modeloPrueba', 'modelo');
			// la información recuperada de la BBDD se pasa a la vista mediante un
			// array, "datos" en este caso.

			//End Content page setup

			// load Header View
			$this->load->view('vistasTienda/Header');
			$this->load->view('vistasTienda/viewTienda');
			$this->load->view('vistasTienda/Footer');
			// load page Content View
			//$this->load->view('vistasTienda/viewTienda', $datos);
		}

		public function _remap($method, $params = array()){
			if ( function_exists($method)){
				return call_user_func_array(array($this, $method), $params);
			} else {
				$this->index();
			}
		}

		private function cargarMenu(){
			$this->load->model("persistencia/menu_model", "menu");
			$elementos = $this->menu->all();
			$this->multi_menu->set_items($elementos);
		}
	}
?>