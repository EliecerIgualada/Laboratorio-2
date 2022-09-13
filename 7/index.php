<?php
$pr=$_GET["ps"];
$p1=$pr*0.4;
$p2=$pr*0.3;
$p3=$pr*0.3;
$total=$p1+$p2+$p3;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 7</title>
</head>
<body>
    <div class="container-sm">
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Areas</th>
                    <td scope="col">Monto Presupuestal</td>
                    <td scope="col">Ginecología</td>
                    <td scope="col">Traumatología</td>
                    <td scope="col">Pediatría</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Porcentaje</th>
                    <th scope="row"><?php echo $total?></th>
                    <td><?php echo $p1?></td>
                    <td><?php echo $p2?></td>
                    <td><?php echo $p3?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>