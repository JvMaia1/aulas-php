<?php
// Variáveis
$curso = "Téc. Informatica para Internet"; //string
$ano = 2026; //inteiro
$preco = 90.3; // real, float?

// constantes

define("DONO", "Fulano de tal"); //antiga

const EMPRESA = "XPTO"; // moderna

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>
        <!-- saida de dados com a sintaxe abreviada -->
        <h2>Dono: <?= DONO ?></h2>
        <h2>Empresa: <?= EMPRESA ?></h2>
        
        <?php
            // concatenação
            echo "<p>Estou fazendo o curso ".$curso." no ano de ".$ano."</p>"; 
        
            // interpolação
            echo "<p>Estou fazendo o curso $curso no ano de $ano</p>"; 
            
            // Com aspas simples não já interpolaçao
            echo '<p>Estou fazendo o curso $curso no ano de $ano</p>'; 
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>