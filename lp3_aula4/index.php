<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 4</title>
</head>

<body>

    <h1>Questao 1</h1>

    <?php

    for ($i = -10; $i <= 10; $i++) {

        echo "$i <br>";
    }

    ?>

    <h1>Questao 2</h1>

    <?php

    $soma = 0;

    for ($i = 0; $i < 500; $i++) {

        if ($i % 3 == 0 && $i % 2 != 0) {

            $soma += $i;
        }
    };

    echo "A soma é $soma";


    ?>

    <h1>Questao 3</h1>

    <?php

    for ($i = 100; $i >= 0; $i += -10) {

        echo "$i <br>";
    };

    echo "Acabou";


    ?>

    <h1>Questao 4</h1>

    <?php

    for ($i = 100; $i >= 0; $i--) {

        if ($i % 2 != 0) {

            if ($i % 5 == 0) {

                echo "[$i] Multiplo de 5 <br>";
            } else {

                echo "$i <br>";
            }
        }
    }

    ?>

    <h1>Questao 5</h1>

    <?php


    for ($i = 150; $i >= 0; $i += -5) {

        echo "$i <br>";
    };


    ?>

    <h1>Questao 6</h1>

    <?php

    $i = 150;

    while ($i >= 0) {

        echo "$i <br>";

        $i += -5;
    }

    ?>

</body>

</html>