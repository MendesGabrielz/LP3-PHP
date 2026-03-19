<?php

$atividade = $_POST['campoAtiv'];

if ($atividade < 10) {

    $soma = $atividade * 2;
    $dinheiro = $soma * 0.05;
} elseif ($atividade >= 10 && $atividade < 20) {

    $soma = $atividade * 5;
    $dinheiro = $soma * 0.05;
} elseif ($atividade >= 20) {

    $soma = $atividade * 10;
    $dinheiro = $soma * 0.05;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Atividade 3</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center" style="width: 22rem;">
            <div class="card-body">
                <h5 class="card-title">Dinheiro ganho por atividade: </h5>
                <p class="card-text"> Você fez <?php echo "<span class='badge rounded-pill text-bg-primary'>$soma</span>" ?> pontos e ganhou <?php echo "<span class='badge rounded-pill text-bg-success'>$dinheiro</span>" ?>
                </p>
                <a href="atividade.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>