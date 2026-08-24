<?php
// Variáveis
$curso = 'Téc. Informatica para Internet'; //string
$ano = 2026; //inteiro
$preco = 90.3; // real, float?

// constantes

define('DONO', 'Fulano de tal'); //antiga

const EMPRESA = 'XPTO';

// moderna
?>
<?php include('../components/header.php'); ?>
<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>
        <!-- saida de dados com a sintaxe abreviada -->
        <h2>Dono: <?= DONO ?></h2>
        <h2>Empresa: <?= EMPRESA ?></h2>
        
        <?php
        // concatenação
        echo '<p>Estou fazendo o curso ' . $curso . ' no ano de ' . $ano . '</p>';

        // interpolação
        echo "<p>Estou fazendo o curso $curso no ano de $ano</p>";

        // Com aspas simples não já interpolaçao
        echo '<p>Estou fazendo o curso $curso no ano de $ano</p>';
        ?>

</body>
</html>