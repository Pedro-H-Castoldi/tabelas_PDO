<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("pais", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("pais", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("pais", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("pais");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_pais.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>PAÍS</h1></caption>
 			<tr>
 				<th>ID país</th>
 				<th>País</th>
 				<th>Ultima Atualização</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["pais_id"];?></th>
 				<th><?php echo $v["pais"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_pais.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["pais_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="pais.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["pais_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>