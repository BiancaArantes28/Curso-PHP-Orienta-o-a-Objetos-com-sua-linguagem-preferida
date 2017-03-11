<?php require_once("cabecalho.php"); 		
require_once("conecta.php"); 
require_once("class/Produto.php");
require_once("class/Categoria.php");


$categoria = new Categoria();
$categoria->id = $_POST['categoria_id'];

if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}
$produto = new Produto($_POST['nome'],$_POST['preco'],$_POST['descricao'],$categoria,$usado);
//$produto->id = $_POST['id'];

if($_POST['tipoProduto'] == "Livro"){
	$produto = new Livro($_POST['nome'],$_POST['preco'],$_POST['descricao'],$categoria,$usado);
	$produto->isbn = $_POST['isbn'];
}else{
	$produto = new Produto($_POST['nome'],$_POST['preco'],$_POST['descricao'],$categoria,$usado);
}

$produtoDao = new ProdutoDAO($conexao);
if($produtoDao->alteraProduto($produto,$_POST['id'])) { ?>
	<p class="text-success">O produto <?= $produto->nome ?>, <?= $produto->getPreco() ?> foi alterado.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>			
