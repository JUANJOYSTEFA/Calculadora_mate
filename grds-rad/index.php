<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Grados -> Radianes</title>
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
			<h1>Ingrese Los Grados:</h1>
			<form action="" method="post">
				<center>
					<input type="number" class="input" name="grados" min="0">
					<input type="submit" value="Calcular" class="submit">
				</center>
			</form>
			<center>
				<h1 class="result">Resultado:</h1>
				<br>
				<h1>
					<?php
					if (!empty($_POST['grados'])) {
						$grados = $_POST['grados'];
						function calcularMCD($a, $b)
						{
							while ($b != 0) {
								$temp = $b;
								$b = $a % $b;
								$a = $temp;
							}
							return $a;
						}
						$mcd = calcularMCD($grados, 180);
						$numerador = $grados / $mcd;
						$denominador = 180 / $mcd;
						echo "La respuesta Exacta es: <br> $numerador / $denominador &pi; Rad<br>";
						$radianes = ($grados * M_PI) / 180;
						echo "La respuesta Redondeada es: <br> $radianes Rad";
					}
					?>
				</h1>
			</center>
		</div>
	</div>
</body>

</html>