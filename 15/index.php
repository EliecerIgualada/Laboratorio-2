<?php 
$monto=$_GET["mt"];
$tipo=$_GET["tp"];
if ($tipo==1){
    $result=($monto*0.25)+$monto;
    $porc="25%";
}elseif ($tipo==2){
    $result=($monto*0.35)+$monto;
    $porc="35%";
}elseif ($tipo==3){
    $result=($monto*0.40)+$monto;
    $porc="40%";
}else{
    $result=($monto*0.50)+$monto;
    $porc="50%";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>problema 15</title>
</head>
<body>
    <h1>Banco "Pueblo desconocido"</h1>
    <div class="container-sm">
        <?php echo "Ingresar el monto de su tarjeta $monto, tipo de tarjeta $tipo"?><br>
        <?php echo "Como cliente tipo $tipo El banco 'pueblo desconocido' le aumentará un $porc a su crédito"?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>