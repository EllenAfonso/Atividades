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
			$this->velocidade_atual = 
				$this->velocidade_atual + $valor_aceleracao*$tempo;
		
			if($this->velocidade_atual > $this->velocidade_maxima){
				$this->velocidade_atual = $this->velocidade_maxima; 
			}
		
		}
		public function frear($valor_frenagem, $tempo){
			$this->velocidade_atual = 
				$this->velocidade_atual - $valor_frenagem*$tempo;
			
			if($this->velocidade_atual < 0){
				$this->velocidade_atual = 0; 
			}
		}
		public function virar($lado){
			//implementacao
		}
		
		
	}
?>