<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="inventario.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_inventario" placeholder="id_inventario"><br>
		<input type="text" name="filme_id" placeholder="filme_id"><br>
		<input type="text" name="loja_id" placeholder="loja_id"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>