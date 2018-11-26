<!DOCTYPE html>
<html>
	<head>
	<style>
	input[type="number"] {
   width:50px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
	</head>
	<body>
	


	<!-- Cantidad de menus -->
	<form  method="post">
	tiempo:	<input type="text" id="t" name="t"> 
	<br><br>	lux:	<input type="text" id="lux" name="lux"> 
		<br><br>
	
		

		<input type="submit" value="enviar">

	</form>
	
	
	
	<?php
	$p = 2.5; //porcentaje party
	$c=1.53;
	$lux=$_POST['lux'];
	


	$t=$_POST['t'];
	$luxmin=round($lux /($t + $c)) ;
		$luxminf=number_format(round($lux /($t + $c)));
	$party = $lux * $p ;
			$partyf = number_format($lux * $p) ;
	$luxminp=$party / $t;
			$luxminpf=number_format( $party / $t);
		
		echo"<table>
<tr>
  <td><strong>Tiempo de matar al boss</strong></td>
  <td><strong>Lux sin bono</strong></td>
  <td><strong>Lux/min</strong></td>
  <td><strong>% Party</strong></td>
  <td><strong>Lux/min (%party)</strong></td>
    <td><strong>Objetivo</strong></td>
  <td><strong>Mínimo bosses</strong></td>
  <td><strong>Lux Actual</strong></td>
  <td><strong>Mínimo Tiempo (horas)</strong></td>
  <td><strong>Estimación</strong></td>
  <td><strong>Lux respecto al mínimo</strong></td>
</tr>
 
<tr>
  <td>$t</td>
  <td>$lux</td>
  <td>$luxminf</td>
  <td>$partyf</td>
  <td>$luxminpf</td>
 
</tr>

</table>"
		;
		?>
	

		<br>	
	<a href="index.php">Menu</a>


	</body>
</html>