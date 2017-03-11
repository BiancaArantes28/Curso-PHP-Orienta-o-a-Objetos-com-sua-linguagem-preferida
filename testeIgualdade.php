<?php 
	require_once("class/Produto.php");
	
	$livro = new Produto();
	
	$livro->nome = "Livro da casa do código";
	
	$livro2 = new Produto();
	
	$livro2->nome = "Livro da casa do código";
	
	if($livro == $livro2){
		echo "são iguais";
	}else{
		echo "são diferentes";
	}
?>