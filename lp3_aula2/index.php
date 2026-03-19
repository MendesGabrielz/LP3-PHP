<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 AULA 2</title>
</head>

<body>

    <h1>LP3 Aula 2</h1>

    <?php

    $xuxu = 5;

    ?>

    <h3>Lista</h3>

    <ul>

        <?php

        if ($xuxu % 2 == 0) {

            echo "<li>A variavel xuxu é par</li>";
        } else {

            echo "<li>A variavel xuxu é impar</li>";
        }

        ?>

        <?php

        if ($xuxu % 2 == 0) { ?>
            <li>A variavel xuxu é par</li>
            <li>A</li>
        <?php } else { ?>
            <li>A variavel xuxu é impar</li>
            <li>B</li>
        <?php }  ?>

    </ul>


</body>

</html>