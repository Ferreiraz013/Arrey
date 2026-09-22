<?php
$nomes = ['Ana', 'Bruno', 'Carlos', 'Diana', 'Eduardo', 'Fernanda', 'Giovanna', 'Henrique'];

$indice = array_search('Carlos', $nomes);
unset($nomes[$indice]);
$nomes = array_values($nomes);

$indiceFernanda = array_search('Fernanda', $nomes);
$nomes[$indiceFernanda] = 'Laura';

array_unshift($nomes, 'Zeca');
array_push($nomes, 'Wesley');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 3 — Manipulação de Nomes</h2>
        <div class="card">
            <p><strong>Quantidade de nomes:</strong> <?= count($nomes); ?></p>
            <p><strong>Lista final:</strong> <?= implode(', ', $nomes); ?></p>
        </div>
        <a class="back-link" href="../index.php">← Voltar</a>
    </div>
</body>
</html>
