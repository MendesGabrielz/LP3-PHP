<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Atividade 2</title>
</head>

<body>

    <table class="table table-striped table-hover">
        <tbody>
            <?php
            if (isset($_GET['campoNum'])) {
                $Num = $_GET['campoNum'];

                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th scope='col'>Numero</th>";
                echo "<th scope='col'>Multiplicador</th>";
                echo "<th scope='col'>Resultado</th>";
                echo "</tr>";

                for ($i = 0; $i < 11; $i++) {
                    $res = $Num * $i;

                    echo "<tr>";
                    echo "<td>$Num</td>";
                    echo "<td>$i</td>";
                    echo "<td>$res</td>";
                    echo "</tr>";
                }
            } else {

                echo "<div class='alert alert-danger shadow border-danger text-center' style='width: 100vdh;'>DEU ERRO PO</div>";
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>