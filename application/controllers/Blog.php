<?php
	class Blog extends CI_Controller{
		public function index(){
			echo 'Bienvenido al Blog';
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