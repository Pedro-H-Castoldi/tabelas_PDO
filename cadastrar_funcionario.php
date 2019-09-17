<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="funcionario.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_funcionario" placeholder="id_funcionario"><br>
		<input type="text" name="primeiro_nome" placeholder="primeiro_nome"><br>
		<input type="text" name="ultimo_nome" placeholder="ultimo_nome"><br>
		<input type="text" name="endereco_id" placeholder="endereco_id"><br>
		<input type="text" name="foto" placeholder="foto"><br>
		<input type="text" name="email" placeholder="email"><br>
		<input type="text" name="loja_id" placeholder="loja_id">
		<br>
		<input type="text" name="ativo" placeholder="ativo"><br>
		<input type="text" name="usuario" placeholder="usuario"><br>
		<input type="text" name="senha" placeholder="senha"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>