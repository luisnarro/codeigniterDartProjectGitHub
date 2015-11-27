<?php
	class Home extends CI_Controller{
		public function index(){
			$this->load->view('vistasTienda/viewTienda');
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