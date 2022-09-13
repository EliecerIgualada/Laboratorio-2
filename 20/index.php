<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>problema 20 </title>
</head>
<body>
    <div class="container-sm">
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Gráfico Utilizando Progress bar</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=1;$i<=10;$i++){
                    $aleatorio=rand(0,100)?>
                    
                <tr>
                    <th scope="row"><?php echo $i?></th>
                    <td><?php echo $aleatorio?></td>
                    <td><div class="progress">
                        <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $aleatorio?>%;" aria-valuenow="<?php echo $aleatorio?>" aria-valuemin="0" aria-valuemax="100"><?php echo $aleatorio?>%</div>
                    </div></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>