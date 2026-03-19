<?php

$valor = $_POST['campoCompra'];
$select = $_POST['campoSelect'];
$verdade = false;

if ($select == 1) {

    if ($valor > 500) {

        $valor_desconto = $valor * 0.05;
        $valor_final = $valor - ($valor * 0.05);
        $verdade = true;

    } else {

        $valor_final = $valor;
    }
} elseif ($select == 2) {

    $valor_final = $valor - ($valor * 0.10);
    $valor_desconto = $valor * 0.10;

    if ($valor > 10000) {

        $frete = "Frete Gratis";
    }
} elseif ($select == 3) {

    $valor_final = $valor - ($valor * 0.15);
    $valor_desconto = $valor * 0.15;
    $frete = "Frete Gratis";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

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
                <h5 class="card-title mb-4">Questão 3</h5>

                <p class="card-text">
                    A quantidade em dinheiro original é:
                    <?php echo "<div class='text-primary'>$valor</div>"; ?>
                </p>

                <?php if ($select == 2 || $select == 3 || $verdade) {

                    echo "O desconto é: <div class='text-primary'>$valor_desconto</div>";
                }

                ?>


                <p class="card-text">
                    Valor final:
                    <?php echo "<div class='text-primary'>$valor_final</div>"; ?>
                </p>

                <div class="d-flex flex-column gap-2 align-items-center justify-content-center">
                <?php if ($select == 2 || $select == 3) {

                    echo "<div class='badge bg-success'>$frete</div>";
                }

                ?>

                <a href="atividade.php" class="btn btn-primary">Voltar</a>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>