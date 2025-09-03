<?php

$nota = 8; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aluno</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
      
        if ($nota >= 7) {
            echo "<p>Aluno aprovado ✅</p>";
        } else {
            echo "<p>Aluno reprovado ❌</p>";
        }
    ?>
</body>
</html>
