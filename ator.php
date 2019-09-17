<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("ator", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("ator", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("ator", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("ator");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_ator.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>ATOR</h1></caption>
 			<tr>
 				<th>ID Ator</th>
 				<th>Primeiro Nome</th>
 				<th>Ultimo Nome</th>
 				<th>Ultima Atualização</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["ator_id"];?></th>
 				<th><?php echo $v["primeiro_nome"];?></th>
 				<th><?php echo $v["ultimo_nome"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_ator.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["ator_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="ator.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["ator_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>