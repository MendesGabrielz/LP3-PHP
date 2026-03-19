<?php

$select = $_POST['campoSelect'];
$kwh = $_POST['quantkWh'];

if ($select == 1) {

    if ($kwh <= 500) {

        $real = $kwh * 0.40;
    } else {

        $real = $kwh * 0.65;
    }
} elseif ($select == 2) {

    if ($kwh <= 1000) {

        $real = $kwh * 0.55;
    } else {

        $real = $kwh * 0.60;
    }
} elseif ($select == 3) {

    if ($kwh <= 5000) {

        $real = $kwh * 0.55;
    } else {

        $real = $kwh * 0.60;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title mb-4">Questão 2</h5>

                <p class="card-text">
                    A sua quantidade em dinheiro é:
                    <?php echo "<div class='text-primary'>$$real</div>"; ?>
                </p>

                <a href="atividade.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>