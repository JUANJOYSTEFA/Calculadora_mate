<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>GMS -> Grados Decimales</title>
</head>

<body>
	<div class="menu">
		<a href="/calculadora_mate/grados/"><span>Grados Decimales->GMS</span></a><br><br>
		<a href="/calculadora_mate/gms/"><span>GMS->Grados Decimales</span></a><br><br>
		<a href="/calculadora_mate/grds-rad/"><span>Grados->Radianes</span></a><br><br>
		<a href="/calculadora_mate/rad-grds/"><span>Radianes->Grados</span></a><br><br>
		<a href="/calculadora_mate/arco/"><span>Calcular longitud de arco</span></a><br><br>
		<a href="/calculadora_mate/area/"><span>Calcular Área del sector circular</span></a><br><br>
		<a href="/calculadora_mate/vangular/"><span>Calcular Velocidad Angular</span></a><br><br>
		<a href="/calculadora_mate/vlineal/"><span>Calcular Velocidad Lineal</span></a><br><br>
	</div>
	<div class="pagina">
		<div class="wrapper">
			<form action="" method="post">
				<center>
					<h1>Ingrese Los Grados:</h1><br>
					<input type="number" class="input" name="grados" min="0">
					<h1>Ingrese Los Minutos:</h1><br>
					<input type="number" class="input" name="minutos" min="0">
					<h1>Ingrese Los Segundos:</h1><br>
					<input type="number" class="input" name="segundos" min="0">
					<input type="submit" value="Calcular" class="submit">
				</center>
			</form>
			<center>
				<h1 class="result">Resultado:</h1>
				<br>
				<h1>
					<?php
					$grados = 0;
					$minutos = 0;
					$segundos = 0;
					if (!empty($_POST['grados']) and !empty($_POST['minutos']) and !empty($_POST['segundos'])) {
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