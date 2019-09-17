<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("filme", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("filme", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("filme", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("filme");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_filme.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>FILME</h1></caption>
 			<tr>
 				<th>ID Filme</th>
 				<th>Titulo</th>
 				<th>Descrição</th>
 				<th>Ano de Lançamento</th>
 				<th>Idioma ID</th>
 				<th>Idioma Original ID</th>
 				<th>Duração da locação</th>
 				<th>Preço da Locação</th>
 				<th>Duração do Filme</th>
 				<th>Custo de Substituição</th>
 				<th>Classificação</th>
 				<th>Recursos Especiais</th>
 				<th>Ultima Atualização</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["filme_id"];?></th>
 				<th><?php echo $v["titulo"];?></th>
 				<th><?php echo $v["descricao"];?></th>
 				<th><?php echo $v["ano_de_lancamento"];?></th>
 				<th><?php echo $v["idioma_id"];?></th>
 				<th><?php echo $v["idioma_original_id"];?></th>
 				<th><?php echo $v["duracao_da_locacao"];?></th>
 				<th><?php echo $v["preco_da_locacao"];?></th>
 				<th><?php echo $v["duracao_do_filme"];?></th>
 				<th><?php echo $v["custo_de_substituicao"];?></th>
 				<th><?php echo $v["classificacao"];?></th>
 				<th><?php echo $v["recursos_especiais"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_filme.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["filme_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="filme.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["filme_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>