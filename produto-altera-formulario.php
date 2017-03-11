<?php require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("conecta.php");
require_once("class/CategoriaDAO.php");

$id = $_GET['id'];
$produtoDao = new ProdutoDAO($conexao);
$categoria = new CategoriaDAO($conexao);

$produto_buscado = $produtoDao->buscaProduto($id);
$categorias = $categoria->listaCategorias();

$nome = $produto_buscado['nome'];
$preco = $produto_buscado['preco'];
$descricao = $produto_buscado['descricao'];
$categoria = new Categoria;
$categoria->setId($produto_buscado['categoria_id']);
$usado = $produto_buscado['usado'] ? "checked='checked'" : "";
$isbn = $produto_buscado['isbn'];
$tipoProduto = $produto_buscado['tipoProduto'];
$usado = $produto['usado'] ? "checked='checked'" : "";

if($tipoProduto == "LivroFisico"){
	$produto = new LivroFisico($nome, $preco, $descricao, $categoria, $usado);
    $produto->isbn = $isbn;
}else if($tipoProduto == "Ebook"){
	$produto = new Ebook($nome, $preco, $descricao, $categoria, $usado);
    $produto->isbn = $isbn;
}else{
	$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
}
?>			
	<h1>Alterando produto</h1>
	<form action="altera-produto.php" method="post">
		<input type="hidden" name="id" value="<?=$produto_buscado['id']?>">
		<table class="table">
			<?php include("produto-formulario-base.php"); ?>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Alterar</button>
				</td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>			
