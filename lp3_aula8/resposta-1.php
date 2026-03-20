<?php

$valorBase = 20;
$nome = $_POST['campoNome'];
$adicionais = $_POST['adicionais'] ?? [];

if (!empty($adicionais)) {
    $valorLanche = $valorBase + array_sum($adicionais); // Soma os valores do array
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Atividade 1</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title mb-4">Questão 3</h5>

                <p class="card-text">
                    Nome do Cliente:
                    <?php echo "<div class='text-primary'>$nome</div>"; ?>
                </p>


                <p class="card-text">
                    Produtos Selecionados:
                    <?php

                    if (!empty($adicionais)) {
                        foreach ($adicionais as $nomeAdicional => $preco) { // => "Exclui" - separa as informações
                            echo "<div class='text-primary'>$nomeAdicional</div>";
                        }
                    } else {
                        echo "<div class='text-secondary'>Nenhum adicional selecionado</div>";
                    }

                    ?>
                </p>
                <p class="card-text">
                    Valor final:
                    <?php 
                    
                    echo "$valorLanche";
                    
                    ?>

                </p>

                <a href="index.php" class="btn btn-primary">Voltar</a>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>