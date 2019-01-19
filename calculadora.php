<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-png" href="logo.png">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<center>
			<fieldset id="campo">
				<legend>Calculadora</legend>
				<div id="calc">
					<?php
						$sinal = isset($_POST['op']) ? $_POST['op'] : "sinal não definido";
						$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
						$n2 = isset($_POST['n2']) ? $_POST['n2'] : 1;
						if ($sinal == "soma") {
							$r = $n1 + $n2;
						}
						if ($sinal == "sub") {
							$r = $n1 - $n2;
						}
						if ($sinal == "mult") {
							$r = $n1 * $n2;
						}
						if ($sinal == "div") {
							$r = $n1 / $n2;
						}
						echo "<br><br><h2 id='resu'>O resultado da operação é $r</h2><br><br><br>";
					?>
					<input type="button" value="Voltar" class="enviavolt" onclick="javascript:history.back(-1)">
				</div>
			</fieldset>
		</center>
	</body>
</html>