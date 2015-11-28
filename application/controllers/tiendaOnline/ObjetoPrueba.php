<?php
	class ObjetoPrueba{
		private $nombre;
		private $valor;

		public function __construct($nombre, $valor){
			$this->nombre = $nombre;
			$this->valor = $valor;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getValor(){
			return $this->valor;
		}
	}
?>