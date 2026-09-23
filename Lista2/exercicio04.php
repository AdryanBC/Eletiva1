<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 4 - Nome do Mês</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container py-3">
<h1>Nome do mês a partir do número</h1>
<form method="post">
<div class="mb-3">
              <label for="mes" class="form-label">Insira o número do mês:</label>
              <input type="number" id="mes" name="mes" class="form-control" required="" step="any">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mes = $_POST['mes'];

    switch ($mes) {
        case 1:
            $nomeMes = "Janeiro";
            break;
        case 2:
            $nomeMes = "Fevereiro";
            break;
        case 3:
            $nomeMes = "Março";
            break;
        case 4:
            $nomeMes = "Abril";
            break;
        case 5:
            $nomeMes = "Maio";
            break;
        case 6:
            $nomeMes = "Junho";
            break;
        case 7:
            $nomeMes = "Julho";
            break;
        case 8:
            $nomeMes = "Agosto";
            break;
        case 9:
            $nomeMes = "Setembro";
            break;
        case 10:
            $nomeMes = "Outubro";
            break;
        case 11:
            $nomeMes = "Novembro";
            break;
        case 12:
            $nomeMes = "Dezembro";
            break;
        default:
            $nomeMes = "Mês inválido";
    }

    echo "O mês correspondente é: $nomeMes";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
