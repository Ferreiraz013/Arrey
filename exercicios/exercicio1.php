<?php
$notas = [8, 6, 9, 7, 5, 10, 4, 8, 7, 6];
$aprovados = 0;
$reprovados = 0;

foreach ($notas as $nota) {
    if ($nota >= 7) {
        $aprovados++;
    } else {
        $reprovados++;
    }
}

sort($notas);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 1 — Controle de Notas</h2>
        <div class="card">
            <p><strong>Notas:</strong> <?= implode(', ', $notas); ?></p>
            <p><strong>Maior nota:</strong> <?= max($notas); ?></p>
            <p><strong>Menor nota:</strong> <?= min($notas); ?></p>
            <p><strong>Aprovados:</strong> <?= $aprovados; ?></p>
            <p><strong>Reprovados:</strong> <?= $reprovados; ?></p>
            <p><strong>Notas em ordem crescente:</strong> <?= implode(', ', $notas); ?></p>
        </div>
        <a class="back-link" href="../index.php">← Voltar</a>
    </div>
</body>
</html>
