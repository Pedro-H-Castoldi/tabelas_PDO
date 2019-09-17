<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="filme.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_filme" placeholder="filme_id"><br>
		<input type="text" name="titulo" placeholder="titulo"><br>
		<input type="text" name="descricao" placeholder="descricao"><br>
		<input type="text" name="ano_de_lancamento" placeholder="ano_de_lancamento"><br>
		<input type="text" name="idioma_id" placeholder="idioma_id"><br>
		<input type="text" name="idioma_original_id" placeholder="idioma_original_id"><br>
		<input type="text" name="duracao_da_locacao" placeholder="idioma_da_locacao"><br>
		<input type="text" name="preco_da_locacao" placeholder="preco_da_locacao"><br>
		<input type="text" name="duracao_do_filme" placeholder="duracao_do_filme"><br>
		<input type="text" name="custo_de_substituicao" placeholder="custo_de_substituicao"><br>
		<input type="text" name="classificacao" placeholder="classificacao"><br>
		<input type="text" name="recursos_especiais" placeholder="recursos_especiais"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>