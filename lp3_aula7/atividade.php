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

            <div class="col-md-4">

                <form action="resposta-1.php" method="POST">

                    <div class="mb-3">

                        <label for="campoPeso" class="form-label">Qual sua nota ?</label>
                        <input type="number" class="form-control" id="campoNotaUm" name="campoNotaUm" step="any">

                    </div>

                    <div class="mb-3">

                        <label for="campoAltura" class="form-label">Qual sua nota ?</label>
                        <input type="number" class="form-control" id="campoNotaDois" name="campoNotaDois" step="any">

                    </div>

                    <div class="mb-3">

                        <label for="campoAltura" class="form-label">Qual sua nota ?</label>
                        <input type="number" class="form-control" id="campoNotaTres" name="campoNotaTres" step="any">

                    </div>


                    <div class="mb-3">

                        <label for="campoAltura" class="form-label">Qual sua frequencia em porcento</label>
                        <input type="number" class="form-control" id="campoFrequencia" name="campoFrequencia" step="any">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col-md-4 d-flex flex-col align-items-center justify-content-center">

                <form action="resposta-2.php" method="POST">

                    <div class="mb-3">

                        <select class="form-select" aria-label="Default select example" name="campoSelect">
                            <option value="1">Residencial</option>
                            <option value="2">Comercial</option>
                            <option value="3">Industrial</option>
                        </select>

                    </div>

                    <div class="mb-3">

                        <label for="campoPeso" class="form-label">Qual a quantidade de kWm consumido ?</label>
                        <input type="number" class="form-control" id="quantkWh" name="quantkWh">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>


            <div class="col-md-4 d-flex flex-col align-items-center justify-content-center">

                <form action="resposta-3.php" method="POST">
                    <div class="mb-3">

                        <select class="form-select" aria-label="Default select example" name="campoSelect">
                            <option value="1">Cliente Comum</option>
                            <option value="2">Cliente Vip</option>
                            <option value="3">Cliente Premium</option>
                        </select>

                    </div>

                    <div class="mb-3">

                        <label for="campoPeso" class="form-label">Quanto foi gasto em sua compra ?</label>
                        <input type="number" class="form-control" id="campoCompra" name="campoCompra">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>