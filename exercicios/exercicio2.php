<?php
$produtos = [
    'Notebook' => 3200.00,
    'Teclado' => 250.00,
    'Mouse' => 180.00,
    'Monitor' => 900.00,
    'Impressora' => 700.00,
    'Webcam' => 420.00,
    'Cadeira' => 950.00,
    'Cabos' => 120.00,
    'Projetor' => 1500.00,
    'Roteador' => 600.00,
];

$produtoMaisCaro = array_search(max($produtos), $produtos);
$produtoMaisBarato = array_search(min($produtos), $produtos);
$valorTotal = array_sum($produtos);
$descontos = [];

foreach ($produtos as $nome => $preco) {
    if ($preco > 500) {
        $descontos[$nome] = $preco * 0.9;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 2 — Produtos e Preços</h2>
        <div class="card">
            <p><strong>Produtos:</strong></p>
            <?php foreach ($produtos as $nome => $preco): ?>
                <p><?= $nome; ?>: R$ <?= number_format($preco, 2, ',', '.'); ?></p>
            <?php endforeach; ?>
            <p><strong>Produto mais caro:</strong> <?= $produtoMaisCaro; ?> (R$ <?= number_format(max($produtos), 2, ',', '.'); ?>)</p>
            <p><strong>Produto mais barato:</strong> <?= $produtoMaisBarato; ?> (R$ <?= number_format(min($produtos), 2, ',', '.'); ?>)</p>
            <p><strong>Valor total:</strong> R$ <?= number_format($valorTotal, 2, ',', '.'); ?></p>
            <p><strong>Desconto de 10% em produtos acima de R$ 500,00:</strong></p>
            <?php foreach ($descontos as $nome => $valor): ?>
                <p><?= $nome; ?>: R$ <?= number_format($valor, 2, ',', '.'); ?></p>
            <?php endforeach; ?>
        </div>
        <a class="back-link" href="../index.php">← Voltar</a>
    </div>
</body>
</html>
