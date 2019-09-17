<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<form method="POST" action="pagamento.php">
		<h2>Cadastrar Dados</h2>
		<input type="text" name="id_pagamento" placeholder="pagamento_id"><br>
		<input type="text" name="cliente_id" placeholder="cliente_id"><br>
		<input type="text" name="funcionario_id" placeholder="funcionario_id"><br>
		<input type="text" name="aluguel_id" placeholder="aluguel_id"><br>
		<input type="text" name="valor" placeholder="valor"><br>
		<input type="text" name="data_de_pagamento" placeholder="data_de_pagamento"><br>
		<input type="text" name="ultima_atualizacao" placeholder="ultima_atualizacao"><br>
		<input type="hidden" name="inserir">
		<input type="submit" name="" value="Cadastrar"><br>
	</form>
</body>
</html>