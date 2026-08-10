<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
        //condicional aninhada
        if($qtdEmEstoque  === 0) echo "<p><mark class='comprar'>🚨Urgente</mark></p>";
    
    } else {
        echo "<p>Estoque normal</p>";
    }

    ?>
    
    <hr>
    <h2>Condicional encadeada</h2>

    <?php 
    $excessoDeEstoque = $qtdEmEstoque > 100 ? "Sim" : "Não";

    $idade = 15;

    if($idade <=12){
        $situacao = "criança";

    } elseif($idade <= 17){
        $situacao = "adolescente";

    } elseif($idade <= 59){
        $situacao = "adulto";

    } else {
        $situacao = "idoso";
    }

    ?>
    
    <p>O usuário tem <?= $idade ?> e é <?= $situacao ?></p>
    <h2>Usando os comandos <code>switch/case/default/break</code></h2>

    <?php 
    // Prototipo chatbot
    //opções: 1 (informaçoes), 2 (reclamação), 3 (elogio), x (invalida)
    $opcao = 1; // input simulado
    
    switch($opcao){
        case 1: $texto ="Legal, o que quer saber?"; break;
        case 2: $texto ="Que pena, o que houve?"; break;
        case 3: $texto ="Que bacana, pode falar!"; break;
        default: $texto ="Não entendi... vou te encaminhar para um especialista";
    }
    ?>

    <p><?= $texto ?></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>