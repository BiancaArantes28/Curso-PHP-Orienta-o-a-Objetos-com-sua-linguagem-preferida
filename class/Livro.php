<?php 
	require_once("class/Produto.php");
	abstract class Livro extends Produto{
		
		public $isbn;
		
		public function calculaImposto(){
			return $this->getPreco() * 0.06;
		}
		
		public function calculaPrecoDeVenda(){
			
		}
	}

?>