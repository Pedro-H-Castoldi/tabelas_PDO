<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="cidade.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_cidade" placeholder="id_cidade"><br>
		<input type="text" name="cidade" placeholder="cidade"><br>
		<input type="text" name="pais_id" placeholder="pais_id"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>