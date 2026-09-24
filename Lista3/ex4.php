<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 4 - Validar Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container py-3">
<h1>Validação de data</h1>
<form method="post">
<div class="mb-3">
              <label for="dia" class="form-label">Insira o dia:</label>
              <input type="number" id="dia" name="dia" class="form-control" required="" step="any">
            </div><div class="mb-3">
              <label for="mes" class="form-label">Insira o mês:</label>
              <input type="number" id="mes" name="mes" class="form-control" required="" step="any">
            </div><div class="mb-3">
              <label for="ano" class="form-label">Insira o ano:</label>
              <input type="number" id="ano" name="ano" class="form-control" required="" step="any">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    if (checkdate($mes, $dia, $ano)) {
        $dataFormatada = sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
        echo "Data válida: $dataFormatada";
    } else {
        echo "Data inválida.";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
