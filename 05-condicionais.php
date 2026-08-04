<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
</head>
<body>
    <h1>Trabalhando com estruturas condicionais</h1>
    <hr>
    <h2>Condicional simples: <code>if</code></h2>
    <?php 
    $numero = 50;
    if($numero > 10){
        echo "<p>$numero é maior que 10</p>";
    }
    
    if($numero > 10) echo "<p>$numero é maior que 10</p>";
    
    if($numero > 10):
        echo "<p>$numero é maior que 10</p>"; 
    endif;

    ?>

</body>
</html>