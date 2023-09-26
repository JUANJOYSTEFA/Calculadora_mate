<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Grados Decimales -> GMS</title>
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
			<h1>Ingrese Los Radianes:</h1>
			<form action="" method="post">
				<center>
					<input type="number" class="input" name="radianes" min="0" step="0.000001">
					<input type="submit" value="Calcular" class="submit">
				</center>
			</form>
			<center>
				<h1 class="result">Resultado:</h1>
				<br>
				<h1>
					<?php
					if (!empty($_POST['radianes'])) {
						$radianes = $_POST['radianes'];
						$grados = $radianes * (180 / M_PI);
						echo "La respuesta Redondeada es: <br> $grados °";
					}
					?>
				</h1>
			</center>
		</div>
	</div>
</body>

</html>