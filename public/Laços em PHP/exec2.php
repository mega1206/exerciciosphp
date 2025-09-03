<?php

$produtos = [
    "Arroz" => 20.50,
    "Feijão" => 8.90,
    "Macarrão" => 5.70,
    "Óleo" => 6.30,
    "Açúcar" => 4.80
];


$total = 0;


foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    $total += $preco;
}


echo "<hr>";
echo "Valor total da compra: R$ " . number_format($total, 2, ',', '.');
?>
