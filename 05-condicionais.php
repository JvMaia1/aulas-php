<?php $css_interno = "
    .comprar{
        color: red;
    }
    
    mark{
        padding: 5px;
        border-radius: 2px;
    }
    "
?>
<?php include('components/header.php'); ?>
<body>
    <h1>Trabalhando com estruturas condicionais</h1>
    <hr>
    <h2>Condicional simples: <code>if</code></h2>
    <?php
    $numero = 50;

    if ($numero > 10) {
        echo "<p>$numero é maior que 10</p>";
    }

    if ($numero > 10) {
        echo "<p>$numero é maior que 10</p>";
    }

    if ($numero > 10):
        echo "<p>$numero é maior que 10</p>";
    endif;
    ?>
    
    <h2>Condicional composta <code>If/else</code></h2>
    
    <?php
    $produto = 'Ultrabook';
    $qtdEmEstoque = 0;
    $qtdCritica = 5;
    ?>
    <h3><?= $produto ?></h3>
    <p><b>Quantidade em estoque: </b><?= $qtdEmEstoque ?></p>

    <?php if ($qtdEmEstoque < $qtdCritica) {
        echo "<p style='color: red;'>É necessario comprar/repor</p>";
        //condicional aninhada
        if ($qtdEmEstoque === 0) {
            echo "<p><mark class='comprar'>🚨Urgente</mark></p>";
        }
    } else {
        echo '<p>Estoque normal</p>';
    } ?>
    
    <hr>
    <h2>Condicional encadeada</h2>

    <?php
    $excessoDeEstoque = $qtdEmEstoque > 100 ? 'Sim' : 'Não';

    $idade = 15;

    if ($idade <= 12) {
        $situacao = 'criança';
    } elseif ($idade <= 17) {
        $situacao = 'adolescente';
    } elseif ($idade <= 59) {
        $situacao = 'adulto';
    } else {
        $situacao = 'idoso';
    }
    ?>
    
    <p>O usuário tem <?= $idade ?> e é <?= $situacao ?></p>
    <h2>Usando os comandos <code>switch/case/default/break</code></h2>

    <?php
    // Prototipo chatbot
    //opções: 1 (informaçoes), 2 (reclamação), 3 (elogio), x (invalida)
    $opcao = 1; // input simulado

    switch ($opcao) {
        case 1:
            $texto = 'Legal, o que quer saber?';
            break;
        case 2:
            $texto = 'Que pena, o que houve?';
            break;
        case 3:
            $texto = 'Que bacana, pode falar!';
            break;
        default:
            $texto = 'Não entendi... vou te encaminhar para um especialista';
    }
    ?>

    <p><?= $texto ?></p>
</body>
</html>