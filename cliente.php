<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("cliente", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("cliente", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("cliente", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("cliente");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_cliente.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>CLIENTE</h1></caption>
 			<tr>
 				<th>ID Cliente</th>
 				<th>Loja ID</th>
 				<th>Primeiro Nome</th>
 				<th>Ultimo Nome</th>
 				<th>E-mail</th>
 				<th>Endereço ID</th>
 				<th>Ativo</th>
 				<th>Data Criação</th>
 				<th>Ultima Atualização</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["cliente_id"];?></th>
 				<th><?php echo $v["loja_id"];?></th>
 				<th><?php echo $v["primeiro_nome"];?></th>
 				<th><?php echo $v["ultimo_nome"];?></th>
 				<th><?php echo $v["email"];?></th>
 				<th><?php echo $v["endereco_id"];?></th>
 				<th><?php echo $v["ativo"];?></th>
 				<th><?php echo $v["data_criacao"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_cliente.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["cliente_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="cliente.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["cliente_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>