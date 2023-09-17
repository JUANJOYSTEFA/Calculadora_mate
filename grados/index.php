<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Calculadora</title>
</head>

<body>
	<div class="wrapper">
		<h1>Ingrese Los Grados Decimales:</h1>
		<form action="" method="post">
			<input type="number" class="input" name="grados" step="0.00001">
			<input type="submit" value="Calcular" class="submit">
		</form>
		<center>
			<h1 class="result">Resultado:</h1>
			<br>
			<h1>
				<?php
				if (isset($_POST['grados'])) {
					$grados = strval($_POST['grados']);
					$decimal = floor($grados);
					$minutosDecimal = ($grados - $decimal) * 60;
					$minutos = floor($minutosDecimal);
					$segundos = ($minutosDecimal - $minutos) * 60;
					$resultado = sprintf("%d° %d' %.2f\"", $grados, $minutos, round($segundos));
					echo $resultado;
				}
				?>
			</h1>
		</center>
	</div>
</body>

</html>