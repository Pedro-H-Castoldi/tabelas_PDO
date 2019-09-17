<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("idioma", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("idioma", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("idioma", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("idioma");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_idioma.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>IDIOMA</h1></caption>
 			<tr>
 				<th>ID Idioma</th>
 				<th>Nome</th>
 				<th>Ultima Atualização</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["idioma_id"];?></th>
 				<th><?php echo $v["nome"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_idioma.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["idioma_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="idioma.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["idioma_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>