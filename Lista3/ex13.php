<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 13 - Palavras da Frase</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container py-3">
<h1>Total de palavras e maior palavra</h1>
<form method="post">
<div class="mb-3">
              <label for="frase" class="form-label">Insira uma frase:</label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $frase = $_POST['frase'];
    $palavras = explode(' ', trim($frase));
    $totalPalavras = count($palavras);
    $maiorPalavra = '';

    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maiorPalavra)) {
            $maiorPalavra = $palavra;
        }
    }

    echo "Total de palavras: $totalPalavras<br>";
    echo "Maior palavra: $maiorPalavra";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
