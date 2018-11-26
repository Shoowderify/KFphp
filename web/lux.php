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
<script>
function varios(){
<!-- Suma -->
n1 = parseInt(formulario.txt_num.value);
n2 = parseInt(formulario.txt_num2.value);
formulario.txt_resultado.value=n1+(n2/60);
}
</script>
	</head>
	<body>
	<form name="formulario">
	<center>
<h1>Calculadora de tiempo</h1>
<p>
	<align="center"> Minutos</align>
<input type="text" name="txt_num" size="20">
<p>
<align="center">Segundos</align>
<input type="text" name="txt_num2" size="20">
<p>

<align="center">Tiempo</align>
<input type="text" name="txt_resultado" size="20">

<input type="button" value="CALCULAR" onclick="varios()">
	
	</form>
	<p>
	<hr>
<h1>Calculadora de lux</h1>
<p>
	<form  method="post" action="luxr.php">
	tiempo:	<input type="text" id="t" name="t"> 
	<br><br>	lux:	<input type="text" id="lux" name="lux"> 
		<br><br>
	
		

		<input type="submit" value="enviar">

	</form>
	
	

	

		<br>	
	


	</body>
</html>