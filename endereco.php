<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("endereco", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("endereco", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("endereco", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("endereco");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_endereco.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>ENDEREÇO</h1></caption>
 			<tr>
 				<th>ID Endereço</th>
 				<th>Endereço</th>
 				<th>Endereço 2</th>
 				<th>Bairro</th>
 				<th>Cidade ID</th>
 				<th>CEP</th>
 				<th>CEP</th>
 				<th>Telefone</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["endereco_id"];?></th>
 				<th><?php echo $v["endereco"];?></th>
 				<th><?php echo $v["endereco2"];?></th>
 				<th><?php echo $v["bairro"];?></th>
 				<th><?php echo $v["cidade_id"];?></th>
 				<th><?php echo $v["cep"];?></th>
 				<th><?php echo $v["telefone"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_endereco.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["endereco_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="endereco.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["endereco_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>