<?php
// Definição da variável com o nome da imagem
$imagem = "foto.jpg"; // coloque o nome do arquivo da sua imagem
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imagem Dinâmica</title>
</head>
<body>
    <h1>Exibindo Imagem com PHP</h1>
    <!-- PHP dentro do atributo -->
    <img src="<?php echo $imagem; ?>" alt="Imagem dinâmica" width="300">
</body>
</html>
