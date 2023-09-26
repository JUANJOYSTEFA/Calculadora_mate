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

			<form action="" method="post">
				<center>
					<ul>
						<li>
							<h1>Ingrese El Radio:</h1>
						</li>
						<li>
							<input type="number" class="input" name="arco" min="0">
							<select name="arcom" class="select">
								<option>Centimetros</option>
								<option>Metros</option>
								<option>Kilometros</option>
							</select>
						</li>
					</ul>
					<ul>
						<li>
							<h1>Ingrese El Ángulo:</h1>
						</li>
						<li>
							<input type="number" class="input" name="angulo" min="0">
							<select name="angulom" class="select">
								<option>Grados</option>
								<option>Radianes</option>
							</select>
						</li>
					</ul>
					<input type="submit" value="Calcular" class="submit" name="submit">

				</center>
			</form>
			<center>
				<h1 class="result">Resultado:</h1>
				<br>
				<h1>
					<?php
					if (!empty($_POST['arco']) && !empty($_POST['angulo'])) {
					}
					?>
				</h1>
			</center>
		</div>
	</div>
</body>

</html>