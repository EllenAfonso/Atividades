<?php
	
	class Tabuleiro{
		//Lista de Atributos
		private $linha;
		private $coluna;
		
		
		public function __construct($linha,$coluna){
			$this->linha = $linha;
			$this->coluna = coluna;
		}
		
		public function get_linha(){
			return($this->linha);
		}
		
		public function get_coluna(){
			return($this->coluna);
		}
		
		
		
		//lista de Métodos

?>