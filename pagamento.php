<?php 
	require_once __DIR__ . "/App/autoload.php";
	use App\Read\Visualizar;
	use App\Insert\Inserir;
	use App\Edit\Editar;
	use App\Delete\Deletar as EX;

	if(isset($_POST["elemento"]) && !empty($_POST["elemento"])){
		$deletar = new EX("pagamento", $_POST["elemento"]);
		$tabela = $deletar->apagar();
	}
	elseif(isset($_POST["inserir"])){
		 unset($_POST["inserir"]);
		$inserir = new Inserir("pagamento", $_POST);
		echo $inserir;
	}
	elseif(isset($_POST["editar"])){
		 unset($_POST["editar"]);
		$editar = new Editar("pagamento", $_POST);
		echo $editar;
	}

	$lista = new Visualizar("pagamento");
	$atores = $lista->buscar(1);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="Css/estilo.css">
 </head>

 <body>
 	<form method="POST" action="cadastrar_pagamento.php">
 		<input class="inserir" type="submit" name="Inserir" value="Inserir">
 	</form>

 	<table>
 		
 		<thead>
 			<caption><h1>PAGAMENTO</h1></caption>
 			<tr>
 				<th>ID Pagamento</th>
 				<th>Cliente ID</th>
 				<th>Funcionário ID</th>
 				<th>Aluguel ID</th>
 				<th>Valor</th>
 				<th>Data de Pagamento</th>
 				<th>Ultima Atualização</th>
 				<th>Funções</th>
 			</tr>
 		</thead>
 
 <tbody>
 		<?php 
 		foreach ($atores as $v) {
 		?>
 			<tr>
 				<th><?php echo $v["pagamento_id"];?></th>
 				<th><?php echo $v["cliente_id"];?></th>
 				<th><?php echo $v["funcionario_id"];?></th>
 				<th><?php echo $v["alguel_id"];?></th>
 				<th><?php echo $v["valor"];?></th>
 				<th><?php echo $v["data_de_pagamento"];?></th>
 				<th><?php echo $v["ultima_atualizacao"];?></th>
 				<th>
 					<form method="POST" action="editar_pagamento.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["pagamento_id"];?>">
 						<input type="submit" name="editar" value="Editar">
 					</form>
 					<form method="POST" action="pagamento.php">
 						<input type="hidden" name="elemento" value="<?php echo $v["pagamento_id"];?>">
 						<input type="submit" name="remover" value="Remover">
 					</form>
 					
 				</th>
 			</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
</html>