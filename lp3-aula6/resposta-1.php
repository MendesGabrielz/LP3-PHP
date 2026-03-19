<?php

$peso = $_POST['campoPeso'];
$altura = $_POST['campoAltura'];

$imc = $peso / ($altura * $altura);
$imc_decimal = round($imc, 2);

if ($imc_decimal < 18.5) {

    $categoria = "Abaixo do peso";
    $cor = "alert-warning";

} elseif ($imc_decimal < 25) {

    $categoria = "Peso ideal";
    $cor = "alert-success";

} elseif ($imc_decimal < 30) {

    $categoria = "Sobrepeso";
    $cor = "alert-warning";

} elseif ($imc_decimal < 40) {

    $categoria = "Obesidade";
    $cor = "alert-danger";

} else {

    $categoria = "Obesidade mórbida";
    $cor = "alert-danger";

}

?>

<!DOCTYPE html>
<html lang="en">

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
            <h5 class="card-title mb-4">Resultado do IMC</h5>

            <p class="card-text">
               O seu IMC é:
               <?php echo "<span class='badge rounded-pill text-bg-primary'>$imc_decimal</span>"; ?>
            </p>

            <div class="alert <?php echo $cor; ?>" role="alert">
               <?php echo $categoria; ?>
            </div>

            <a href="atividade.php" class="btn btn-primary">Voltar</a>
         </div>
      </div>
   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>