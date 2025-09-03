<?php

$imagem = "foto.jpg"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imagem Dinâmica</title>
</head>
<body>
    <h1>Exibindo Imagem com PHP</h1>
   
    <img src="<?php echo $imagem; ?>" alt="Imagem dinâmica" width="300">
</body>
</html>
