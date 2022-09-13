<?php
$nom=$_GET["nom"];
$nt1=$_GET["nt1"];
$nt2=$_GET["nt2"];
$nt3=$_GET["nt3"];
$examen=$_GET["nt4"];
$trabajo=$_GET["nt5"];
$p=($nt1+$nt2+$nt3)/3;
$promedio=$p*0.55;
$pe=$examen*0.3;
$ptb=$trabajo*0.15;
$pfinal=$promedio+$pe+$ptb; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 6</title>
</head>
<body>
    <div class="container-sm">
        <h1>Introduzca las calificaciones del alumno</h1>
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">% de Calificaciones</th>
                    <th scope="col">% del Trabajo</th>
                    <th scope="col">% del Examen</th>
                    <th scope="col">Calificación Final /th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> <?php echo $nom ?></th>
                    <td><?php echo $promedio ?></td>
                    <td><?php echo $pe ?></td>
                    <td><?php echo $ptb ?></td>
                    <td><?php echo $pfinal?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>