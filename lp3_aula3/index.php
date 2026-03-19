<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP 3 Aula 3</title>
</head>

<body>

    <h1>Questao 1</h1>

    <?php

    for ($i = 100; $i > 0; $i += -5) { // += -5 vai subtraindo por 5 

        echo "$i <br>";
    }
    echo "Acabou";

    ?>

    <h1>Questao 2</h1>

    <?php

    $soma = 0;
    $divisor = 0;

    for ($i = 14; $i < 73; $i++) {

        $soma += $i;
        $divisor++;
    }

    $media = $soma / $divisor;
    echo "A media é: $media";

    ?>

    <h1>Questao 3</h1>

    <?php

    for ($i = 30; $i > 0; $i--) {

        if ($i % 4 == 0) {

            echo "[$i] Multiplo de 4 <br>";
        } else {

            echo "$i Nao é multiplo <br>";
        }
    }


    ?>

    <h1>Teste</h1>

    <?php

    for ($i = 0; $i <= 10; $i++) {

        for ($contador = 1; $contador <= $i; $contador++) {


            if ($i % $contador == 0) {

                echo "[$i] é multiplo de $contador <br>";
            }
        }
    };

    ?>



</body>

</html>