<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("aluguel", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("aluguel", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("aluguel", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("aluguel");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_aluguel.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>ALUGUEL</h1></caption>
 			<tr>
 				<th>ID Aluguel</th>
 				<th>Data Alguel</th>
 				<th>ID Inventário</th>
 				<th>Cliente ID</th>
 				<th>Data de Devolução</th>
 				<th>Funcionário ID</th>
 				<th>Ultima Atualização</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["aluguel_id"];?></th>
 				<th><?php echo $v["data_de_aluguel"];?></th>
 				<th><?php echo $v["inventario_id"];?></th>
 				<th><?php echo $v["cliente_id"];?></th>
 				<th><?php echo $v["data_de_devolucao"];?></th>
 				<th><?php echo $v["funcionario_id"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_aluguel.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["aluguel_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="aluguel.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["aluguel_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>