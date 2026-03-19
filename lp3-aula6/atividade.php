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

                        <label for="campoPeso" class="form-label">Qual o seu peso ?</label>
                        <input type="number" class="form-control" id="campoPeso" name="campoPeso" step="any">

                    </div>

                    <div class="mb-3">

                        <label for="campoAltura" class="form-label">Qual sua altura ?</label>
                        <input type="number" class="form-control" id="campoAltura" name="campoAltura" step="any">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col-md-4">

                <form action="resposta-2.php" method="POST">

                    <div class="mb-3">

                        <select class="form-select" aria-label="Default select example" name="campoSelect">
                            <option value="1">Popular</option>
                            <option value="2">Luxo</option>
                        </select>

                    </div>

                    <div class="mb-3">

                        <label for="campoPeso" class="form-label">Por quantos dias irá alugar ?</label>
                        <input type="number" class="form-control" id="campoDias" name="campoDias">

                    </div>

                    <div class="mb-3">

                        <label for="campoAltura" class="form-label">Quantidade de km percorridos</label>
                        <input type="number" class="form-control" id="campoQuant" name="campoQuant">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>


            <div class="col-md-4">

                <form action="resposta-3.php" method="POST">

                    <div class="mb-3">

                        <label for="campoPeso" class="form-label">Quantas horas por mes voce pratica atividades fisicas ?</label>
                        <input type="number" class="form-control" id="campoAtiv" name="campoAtiv">

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