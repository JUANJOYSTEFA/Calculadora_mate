<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Calculadora</title>
	<style>
		.menu {
			width: 20%;
			height: 100%;
			background-color: rgba(255, 255, 255, 0.75);
		}

		.pagina {
			width: 80%;
			height: 100%;
		}
	</style>
</head>

<body>
	<div class="menu">
		<span>Grados Decimales -> GMS</span>
	</div>
	<div class="pagina">
		<div class="wrapper">
			<form action="" method="post">
				<h1>Ingrese Los Grados:</h1>
				<input type="number" class="input" name="grados">
				<h1>Ingrese Los Minutos:</h1>
				<input type="number" class="input" name="minutos">
				<h1>Ingrese Los Segundos:</h1>
				<input type="number" class="input" name="segundos">
				<input type="submit" value="Calcular" class="submit">
			</form>
			<center>
				<h1 class="result">Resultado:</h1>
				<br>
				<h1>
					<?php
					$grados = 0;
					$minutos = 0;
					$segundos = 0;
					if (isset($_POST['grados'])) {
						$grados = floatval($_POST['grados']);
					}
					if (isset($_POST['minutos'])) {
						$minutos = floatval($_POST['minutos']);
					}
					if (isset($_POST['segundos'])) {
						$segundos = floatval($_POST['segundos']);
					}
					$resultado = $grados + $minutos / 60 + $segundos / 3600;
					echo $resultado . '°';
					?>
				</h1>
			</center>
		</div>
	</div>
</body>

</html>