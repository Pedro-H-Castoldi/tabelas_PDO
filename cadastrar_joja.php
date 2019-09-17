<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="loja.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_loja" placeholder="id_loja"><br>
		<input type="text" name="gerente_id" placeholder="gerente_id"><br>
		<input type="text" name="endereco_id" placeholder="endereco_id"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>