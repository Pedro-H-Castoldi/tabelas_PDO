<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
	<?php
		require_once __DIR__ . "/App/autoload.php";
		use App\Read\Selecionar;

		$editar = new Selecionar("cliente", $_POST["elemento"]);
		$mostrar = $editar->selecionar();

	 ?>
	<form method="POST" action="cliente.php">
		<h2>Editar Dados</h2>
		<?php 
			foreach ($mostrar as $ch) {
				foreach ($ch as $chave => $valor) {
				?>
				<?= $chave ?>:<br/>
				<input type="text" name="<?= $chave ?>" value="<?= $valor ?>"><br/>
						<?php } break;}?>
		<input type="submit" name="editar" value="Editar"><br>
	</form>
</body>
</html>