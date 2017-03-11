<?php require_once("cabecalho.php"); 
require_once("conecta.php");
require_once("logica-usuario.php");

verificaUsuario();

//$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");

$nome = "";
$descricao = "";
$preco = "";
$categoria_id = "1";
$usado = "";

$categoria = new Categoria();
$categoria->id = $categoria_id;

$produto = new Produto($nome,$descricao,$preco,$categoria,$usado);

$categoriaDao = new CategoriaDAO($conexao);
$categorias = $categoriaDao->listaCategorias($conexao);
?>			
	<h1>Formulário de produto</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			
			<?php include("produto-formulario-base.php"); ?>

			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Cadastrar</button>
				</td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>			
