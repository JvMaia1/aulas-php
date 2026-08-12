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
$numero = 51;

if ($numero > 50) { ?>
    <p style="color: blue;"><?= $numero ?> é maior que 50</p>

<?php }
?>

<?php
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

    <?php if ($qtdEmEstoque < $qtdCritica): ?> <p style='color: red;'>É necessario comprar/repor</p>
    
        <?php if ($qtdEmEstoque === 0): ?> <p><mark class='comprar'>🚨Urgente</mark></p>

    <?php endif;else: ?> <p>Estoque normal</p>;

    <?php endif; ?>

</body>
</html>