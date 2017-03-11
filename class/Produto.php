<?php 
     class Produto{
		 public $id;
		 public $nome;
		 private $preco;
		 public $descricao;
		 public $categoria;
		 public $usado;
		 
		 
		 function __construct($nome = "Produto indefinido",$preco = 999999,$descricao = "Contate o administrador",Categoria $categoria,$usado = "true"){
			 $this->nome = $nome;
			 $this->setPreco($preco);
			 $this->descricao = $descricao;
			 $this->categoria = $categoria;
			 $this->usado = $usado;
		 }
		 
		 function __toString(){
			 return $this->nome.":".$this->preco;
		 }
		 
		 //abstract public function calculaPrecoDeVenda();
		 
		 public function calculaImposto(){
			 return $this->preco * 0.195;
		 }
		 
		 public function temIsbn(){
			 return $this instanceof Livro;
		 }
		 
		 
		 public function valorComDesconto($valor = 0.1){
			 if($valor <= 0.5 && $valor > 0){
			    $this->setPreco($this->preco -= $this->preco * $valor);
			 }
			 return $this->preco;
			 
		 }
		 
		 public function getId(){
			 return $this->id;
		 }
		 
		 public function setId($id){
			 $this->id = $id;
		 }
		 
		 public function getNome(){
			 return $this->nome;
		 }
		 
		 public function setNome($nome){
			 $this->nome = $nome;
		 }
		 
		 public function setPreco($preco){
			 if($preco > 0){
				 $this->preco = $preco;
			 }
		 }
		 
		 public function getPreco(){
			 return $this->preco;
		 }
		 
		 public function getDescricao(){
			 return $this->Descricao;
		 }
		 
		 public function setDescricao($descricao){
			 $this->descricao = $descricao;
		 }
		 
		 public function getCategoria(){
			 return $this->categoria;
		 }
		 
		 public function setCategoria($categoria){
			 $this->categoria = $categoria;
		 }
		 
		 public function getUsado(){
			 return $this->usado;
		 }
		 
		 public function setUsado($usado){
			 $this->usado = $usado;
		 }
	 }
?>