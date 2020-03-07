<?php
	
	class Jogador{
		//Lista de Atributos
		private $nome;
		private $opcao;
		
		
		public function __construct($nome,$opcao){
			$this->nome = $nome;
			$this->opcao = 0;
		}
		
		public function get_nome(){
			return($this->nome);
		}
		
		public function get_opcao(){
			return($this->opcao);
		}
		
		
		
		//lista de Métodos
		public function cadastrar($nome, $opcao){

		}
?>