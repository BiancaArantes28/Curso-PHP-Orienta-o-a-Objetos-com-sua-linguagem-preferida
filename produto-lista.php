<?php require_once("cabecalho.php"); 
 //require_once("banco-produto.php");
 require_once("conecta.php");
  ?>

<table class="table table-striped table-bordered">
	<?php
	    $produtoDao = new ProdutoDAO($conexao);
		$produtos = $produtoDao->listaProdutos();
		foreach($produtos as $produto) :
	?>
	<tr>
		<td><?= $produto->nome ?></td>
		<td><?= $produto->getPreco() ?></td>
		<td><?= $produto->calculaImposto() ?></td>
		<td><?=$produto->calculaPrecoDeVenda()?></td>
		<td><?= substr($produto->descricao, 0, 40) ?></td>
		<td><?= $produto->categoria->nome?></td>
		<td>
			<?php if($produto->temIsbn()){
				echo "ISBN: ".$produto->isbn;
			}?>
		</td>
		<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto->id?>">alterar</a></td>
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto->id?>">
				<button class="btn btn-danger">remover</button>
			</form>
		</td>
	</tr>
	<?php
		endforeach
	?>	
</table>		


<?php include("rodape.php"); ?>			
