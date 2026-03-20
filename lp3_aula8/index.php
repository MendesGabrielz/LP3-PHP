<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 PHP</title>
</head>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>

        <div class="container">

            <div class="row">

                <h1 class="text-center">Formulario</h1>

                <div class="col-md-6">

                    <form action="resposta-1.php" method="POST">

                        <div class="mb-3">

                            <label for="campoPeso" class="form-label">Qual o seu nome ?</label>
                            <input type="text" class="form-control" id="campoNome" name="campoNome" step="any">

                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked name="adicionais[Bacon]" value="3">
                            Bacon: R$ 3,00

                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckChecked" checked name="adicionais[Cheddar]" value="2.50">
                            Cheddar Cremoso: R$ 2,50

                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckChecked" checked name="adicionais[Cebola-Caramelizada]" value="2">

                            Cebola Caramelizada: R$ 2,00

                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckChecked" checked name="adicionais[Hamburguer-Extra]" value="5">

                            Hambúrguer Extra: R$ 5,00

                        </div>


                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar campos</button>

                    </form>

                </div>

                <div class="col-md-6">

                    <form action="resposta-2.php" method="GET">

                        <div class="mb-3">

                            <label for="campoPeso" class="form-label">Qual numero voce quer ?</label>
                            <input type="Number" class="form-control" id="campoNum" name="campoNum" step="any">

                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar campos</button>

                    </form>

                </div>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>

    </html>



</body>

</html>