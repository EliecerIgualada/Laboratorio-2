<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 2</title>
</head>
<body>
<div class="container-sm">
 
<?php
echo "Introduzca los siguientes número para realizar la operación matemáticas de suma"
?>
  </body>
  <form action="index.php" method="POST">
<table>
	<tr>
		<td><input type="text" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="sumar"> </td>
	</tr>
</table>
</form>
</body>
</html>
<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$suma = $num1 + $num2; 
		echo "La suma de ".$num1." y ".$num2." es ".$suma; 
	}
?>
</html>