<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="aluguel.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_aluguel" placeholder="id_aluguel"><br>
		<input type="text" name="data_aluguel" placeholder="data_aluguel"><br>
		<input type="text" name="id_inventario" placeholder="id_inventario"><br>
		<input type="text" name="Cliente_id" placeholder="Cliente_id"><br>
		<input type="text" name="data_de_devolucao" placeholder="data_de_devolucao"><br>
		<input type="text" name="funcionario_id" placeholder="funcionario_id"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>