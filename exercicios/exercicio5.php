<?php
$alunos = [
    ['nome' => 'Alice', 'idade' => 18, 'curso' => 'ADS', 'nota' => 9.5],
    ['nome' => 'Bruno', 'idade' => 20, 'curso' => 'TI', 'nota' => 6.2],
    ['nome' => 'Carla', 'idade' => 19, 'curso' => 'ADS', 'nota' => 8.1],
    ['nome' => 'Diego', 'idade' => 21, 'curso' => 'Redes', 'nota' => 5.7],
    ['nome' => 'Elaine', 'idade' => 22, 'curso' => 'ADS', 'nota' => 9.0],
];

$aprovados = [];
$maiorNota = 0;
$alunoMaiorNota = '';
$somaNotas = 0;

foreach ($alunos as $aluno) {
    $somaNotas += $aluno['nota'];

    if ($aluno['nota'] >= 7) {
        $aprovados[] = $aluno['nome'];
    }

    if ($aluno['nota'] > $maiorNota) {
        $maiorNota = $aluno['nota'];
        $alunoMaiorNota = $aluno['nome'];
    }
}

$media = $somaNotas / count($alunos);
$reprovados = count($alunos) - count($aprovados);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 5 — Cadastro de Alunos</h2>
        <div class="card">
            <p><strong>Alunos aprovados:</strong> <?= implode(', ', $aprovados); ?></p>
            <p><strong>Aluno com maior nota:</strong> <?= $alunoMaiorNota; ?> (<?= number_format($maiorNota, 1, ',', '.'); ?>)</p>
            <p><strong>Média das notas:</strong> <?= number_format($media, 2, ',', '.'); ?></p>
            <p><strong>Quantidade de aprovados:</strong> <?= count($aprovados); ?></p>
            <p><strong>Quantidade de reprovados:</strong> <?= $reprovados; ?></p>
        </div>
        <a class="back-link" href="../index.php">← Voltar</a>
    </div>
</body>
</html>
