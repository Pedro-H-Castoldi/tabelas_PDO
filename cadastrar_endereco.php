<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="endereco.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_endereco" placeholder="id_endereco"><br>
		<input type="text" name="endereco" placeholder="endereco"><br>
		<input type="text" name="endereco2" placeholder="endereco2"><br>
		<input type="text" name="bairro" placeholder="bairro"><br>
		<input type="text" name="cidade" placeholder="cidade"><br>
		<input type="text" name="cep" placeholder="cep"><br>
		<input type="text" name="telefone" placeholder="telefone"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>