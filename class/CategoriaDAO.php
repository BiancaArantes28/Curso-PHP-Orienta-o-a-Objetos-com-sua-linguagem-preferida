<?php
			
class CategoriaDAO{

private $conexao;

function __construct($conexao){
	$this->conexao = $conexao;
}
public function listaCategorias() {
	$categorias = array();
	$query = "select * from categorias";
	$resultado = mysqli_query($this->conexao, $query);
	while($categoria = mysqli_fetch_assoc($resultado)) {
		array_push($categorias, $categoria);
	}
	return $categorias;
}
}