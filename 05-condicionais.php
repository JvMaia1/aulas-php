<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
    <style>
        .comprar{
            color: red;
        }
        
        mark{
            padding: 5px;
            border-radius: 2px;
        }
        
        </style>
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
    
    <h2>Condicional composta <code>If/else</code></h2>
    
    <?php 
    $produto = "Ultrabook";
    $qtdEmEstoque = 0;
    $qtdCritica = 5;
    
    
    ?>
    <h3><?= $produto ?></h3>
    <p><b>Quantidade em estoque: </b><?= $qtdEmEstoque ?></p>

    <?php 
    if($qtdEmEstoque < $qtdCritica) {
        echo "<p style='color: red;'>É necessario comprar/repor</p>";
    
    } else {
        echo "<p>Estoque normal</p>";
    }

    if($qtdEmEstoque  === 0){
        echo "<p><mark class='comprar'>🚨Urgente</mark></p>";
    }
    ?>

</body>
</html>