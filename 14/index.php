<?php 
$anos=$_GET["year"];
if ($anos==1){
    $bono=100;
}elseif ($anos==2){
    $bono=200;
}elseif ($anos==3){
    $bono=300;
}elseif ($anos==4){
    $bono=400;
}elseif ($anos==5){
    $bono=500;
}else{
    $bono=1000;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>problema 14</title>
</head>
<body>
    <h1>Bono por antiguedad</h1>
    <div class="container-sm">
        <?php echo "Ingresar los años que ha trabajado en la empresa $anos"?><br>
        <?php echo "Usted ha recibido un bono de  $bono $ por su compromiso"?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>