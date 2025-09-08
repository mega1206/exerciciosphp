<?php

$produtos = [
    "Arroz" => 20.50,
    "Feijão" => 12.30,
    "Macarrão" => 8.90,
    "Óleo" => 6.50,
    "Açúcar" => 4.75
];


$total = 0;


foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    $total += $preco;
}


echo "<br><strong>Valor total: R$ " . number_format($total, 2, ',', '.') . "</strong>";
?>
