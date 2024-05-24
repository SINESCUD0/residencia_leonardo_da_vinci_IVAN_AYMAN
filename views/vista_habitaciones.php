<script src="/residencialeonardo.atwebpages.com/js/habitacion.js" type="text/javascript"></script>
<form action="" method="post">
	<select onchange='change_select(event)' name='piso' id="selectPiso">
		<option value="1">Planta 1</option>
		<option value="2">Planta 2</option>
		<option value="3">Planta 3</option>
	</select>
	<div id='habitaciones' name="habitaciones">
	<?php
		echo $tabla;
	?>
	</div>
</form>