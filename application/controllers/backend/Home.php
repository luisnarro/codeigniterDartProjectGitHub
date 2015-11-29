<?php
	require_once(APPPATH.'controllers/dominio/ObjetoPrueba.php');

	class Home extends CI_Controller{
		public function index(){
			$datos = array ();

			$objeto = new ObjetoPrueba("Objeto Backend", 4);

			$datos['objeto'] = $objeto;

			$this->load->view('vistasBackend/viewBackend', $datos);
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