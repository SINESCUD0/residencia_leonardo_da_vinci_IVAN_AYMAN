<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>HABITACIONES</title>
		<link href="/residencialeonardo.atwebpages.com/css/habitaciones.css" rel="stylesheet">
		<script src="/residencialeonardo.atwebpages.com/js/habitacion.js" type="text/javascript"></script>
	</head>
<body>
	<form action="" method="post">
		<select onchange='change_select(event)' name='piso' id="selectPiso">
			<option value="1">Planta 1</option>
			<option value="2">Planta 2</option>
			<option value="3">Planta 3</option>
		</select>
		<div id='habitaciones' name="habitaciones">
		<?php
			echo $tabla;
			echo "deberia mostrarse puto";
		?>
		</div>
	</form>
</body>
</html>