<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
    <style>
        body{
            background-color: gray;
        }
        .tem-desconto{
            background-color: burlywood;
            padding: 5px;
            display: inline-block;
            border-radius: 3px;
        }
        
        .tem-desconto#nao-tem{
            color: white;
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Operadores lógicos</h1>
    <hr>
    
    <h2>&& (e/and)</h2>
    <p>Retorna <b>verdadeiro/true</b> se <b>todas</b> as condições forem verdadeiras</p>

<?php 
$nota1 = 10;
$nota2 = 7;
$media = ($nota1+$nota2)/2;
$faltas = 1;
?>

<p><b>Médio: </b><?= $media ?></p>
<p><b>Faltas: </b><?= $faltas ?></p>

<?php if($media >= 7 && $faltas < 10): ?>
    <p style="color:greenyellow;">Aprovado</p>
    <?php else: ?> 
        <p style="color: red;">Reprovado</p>
<?php endif; ?>

<hr>

<h2>|| (Ou/Or)</h2>
<p>Retorna <b>verdadeir/true</b> se pelo menos <b>uma</b> das condições for verdadeira.</p>

<?php 
/* dar um desconto a um cliente desde que ele(a) seja vip ou que tenha cupom de desconto*/
$valor = 1000;
$limiarDesconto = 1900;
$clienteVip = false; // valor lógico pou boleano
$temCupom = $clienteVip || $valor > $limiarDesconto ? true : false;

if($temCupom):
?>

<p class="tem-desconto">Você tem direito a um desconto!</p>

<?php else:?>
    <p id="nao-tem" class="tem-desconto">Sem desconto!</p>
<?php endif;?>

<hr>
<h2>Operador não/negação/not (!)</h2>
<p>Inverte a lógica, se algo for verdadeiro é lido como falso</p>

<?php 
/* Se o usuário não estiver logado, moetre o link de login.
caso contrario exibir uma saudação */
$usuarioLogado = false;
if(!$usuarioLogado):
?>
    <a style="text-decoration: none;" href="#">Logar agora</a>
<?php else: ?>
    <p>Bem vindo usuário!</p>
<?php endif; ?>

</body>
</html>