<?php

	class MenuController extends CI_Controller{
		public function index(){
			$this->load->model("persistencia/menu_model", "menu");
			$elementos = $this->menu->all();
			$this->multi_menu->set_items($elementos);

			$this->load->view('vistasTienda/MenuView');
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