<?php

$select = $_POST['campoSelect'];
$km = $_POST['campoQuant'];
$dias = $_POST['campoDias'];

if ($select == 1) {

    if ($km <= 100) {

        $Pop_Km = $km * 0.20;
    } else {

        $Pop_Km = $km * 0.10;
    }

    $escolha = "Popular";
    $Pop_dias = $dias * 90;

    $reais = $Pop_Km + $Pop_dias;

} elseif ($select == 2) {

    if ($km <= 200) {

        $Lux_km = $km * 0.30;
    } else {

        $Lux_km = $km * 0.25;
    }

    $escolha = "Luxo";
    $Lux_dias = $dias * 150;

    $reais = $Lux_km + $Lux_dias;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Atividade 2</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Aluguel Carros</h5>
                <?php echo "<p class='card-text'>Carro escolhido: $escolha</p>"?>
                <?php echo "<p class='card-text '>Valor a ser pago: <span class='badge rounded-pill text-bg-success'>$reais</span></p>"?>
                <a href="atividade.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>