<?php 
$clientes=$_GET["ps"];
if ($clientes>200 && $clientes<=300){
    $resultado=$clientes*300;
}elseif ($clientes>300){
    $resultado=$clientes*75;
}else {
    $resultado=$clientes*95;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>problema 13</title>
</head>
<body>
    <h1>La Langosta Ahumada</h1>
    <div class="container-sm">
        <?php echo "Ingrese la cantidad de personas para su reservación $clientes"?><br>
        <?php echo "El monto a pagar es de $resultado $"?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>