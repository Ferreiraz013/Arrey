<?php
$turmaA = ['Ana', 'Bruno', 'Carlos', 'Diana', 'Eduardo'];
$turmaB = ['Carlos', 'Diana', 'Fábio', 'Gisele', 'Hugo'];

$emComum = array_values(array_intersect($turmaA, $turmaB));
$soTurmaA = array_values(array_diff($turmaA, $turmaB));
$soTurmaB = array_values(array_diff($turmaB, $turmaA));
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 7 — Alunos de Duas Turmas</h2>
        <div class="card">
            <p><strong>Estão em ambas:</strong> <?= implode(', ', $emComum); ?></p>
            <p><strong>Somente turma A:</strong> <?= implode(', ', $soTurmaA); ?></p>
            <p><strong>Somente turma B:</strong> <?= implode(', ', $soTurmaB); ?></p>
        </div>
        <a class="back-link" href="../index.php">← Voltar</a>
    </div>
</body>
</html>
