<?php function somar($valor1, $valor2)
{
    return $valor1 + $valor2;
} 
?>
<?php include '../components/header.php'; ?>
<body>
<div class="p-2 mt-3 bg-primary text-center">
    <h1>Trabalhando com funçoes</h1>
</div>
<hr>

<div class="container">
    <h2>Função com parâmetros</h2>

    <div class="container bg-dark text-white rounded-3 p-2 px-4">
        <code>
            <pre>

function somar($valor1, $valor2){
    return $valor1 + $valor2;
}</pre>
        </code>
        <p> somar(1 ,2) = <?= somar(1,2) ?> </p>
    </div>
        <hr>
        <h2>Função com parâmetro opcional</h2>
        <?php 
        function exibirMensagem($mensagem, $pessoa = ''){
            return "Olá, $mensagem $pessoa";
        }
        ?>

        <p>Saudação 1: <?= exibirMensagem('Bom dia') ?></p>
        <p>Saudação 1: <?= exibirMensagem('Bom dia', 'Fulano') ?></p>
</div>
</body>
</html>