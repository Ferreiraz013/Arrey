<?php
$estoque = [
    ['nome' => 'Camisa', 'categoria' => 'Vestuário', 'preco' => 49.90, 'quantidade' => 3],
    ['nome' => 'Calça', 'categoria' => 'Vestuário', 'preco' => 89.90, 'quantidade' => 8],
    ['nome' => 'Notebook', 'categoria' => 'Eletrônicos', 'preco' => 2500.00, 'quantidade' => 2],
    ['nome' => 'Mouse', 'categoria' => 'Eletrônicos', 'preco' => 120.00, 'quantidade' => 15],
    ['nome' => 'Caneta', 'categoria' => 'Papelaria', 'preco' => 5.50, 'quantidade' => 6],
];

$estoqueBaixo = [];
$valorTotal = 0;
$maiorValor = 0;
$produtoMaiorValor = '';

foreach ($estoque as $produto) {
    $valorProduto = $produto['preco'] * $produto['quantidade'];
    $valorTotal += $valorProduto;

    if ($produto['quantidade'] < 5) {
        $estoqueBaixo[] = $produto['nome'];
    }

    if ($valorProduto > $maiorValor) {
        $maiorValor = $valorProduto;
        $produtoMaiorValor = $produto['nome'];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 6 — Controle de Estoque</h2>
        <div class="card">
            <p><strong>Produtos com estoque abaixo de 5:</strong> <?= implode(', ', $estoqueBaixo); ?></p>
            <p><strong>Valor total do estoque:</strong> R$ <?= number_format($valorTotal, 2, ',', '.'); ?></p>
            <p><strong>Produto com maior valor armazenado:</strong> <?= $produtoMaiorValor; ?> (R$ <?= number_format($maiorValor, 2, ',', '.'); ?>)</p>
        </div>
        <a class="back-link" href="../index.php">← Voltar</a>
    </div>
</body>
</html>
