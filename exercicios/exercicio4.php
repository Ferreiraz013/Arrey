<?php
$numeros = [3, 1, 5, 3, 7, 1, 9, 3, 2, 7, 10, 10, 11, 2, 8];
$frequencias = array_count_values($numeros);
$repetidos = [];
$unicos = [];

foreach ($frequencias as $numero => $quantidade) {
    if ($quantidade > 1) {
        $repetidos[$numero] = $quantidade;
    } else {
        $unicos[] = $numero;
    }
}
ksort($repetidos);
sort($unicos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 4 — Números Repetidos</h2>
        <div class="card">
            <p><strong>Números repetidos:</strong></p>
            <?php foreach ($repetidos as $numero => $quantidade): ?>
                <p><?= $numero; ?> aparece <?= $quantidade; ?> vez(es).</p>
            <?php endforeach; ?>
            <p><strong>Números que aparecem uma vez:</strong> <?= implode(', ', $unicos); ?></p>
        </div>
        <a class="back-link" href="../index.php">← Voltar</a>
    </div>
</body>
</html>
