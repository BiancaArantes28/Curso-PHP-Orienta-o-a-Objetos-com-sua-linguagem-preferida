<?php 
	require_once("conecta.php");
	
	function listaTexto($conexao){
		$query = "SELECT * FROM texto";
		$resultado = mysqli_query($conexao,$query);
		$texto = mysqli_fetch_assoc($resultado);
		return $texto;
	}