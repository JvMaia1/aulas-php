<?php include '../components/header.php'; ?>

<?php 
$frase = 'bobao';
$frase2 = str_replace('bobao', 'legal', $frase);

$codigoHtml = '<h3>HTML5 - <a href="http://sp.senac.br">Senac </a> <h3>';
$fraseComEspacos = '   Fulano de tal da silva    ';

$fraseParaQuebra = "Prezado Cliente,\n Agradecemos o seu contato e a preferência pelos nossos serviços.\n É uma satisfação tê-lo conosco.\n Informamos que o seu pedido foi processado com sucesso.\n A entrega está prevista para os próximos três dias úteis.\n Caso tenha dúvidas sobre o envio, por favor, verifique os seguintes pontos:\n 1. O endereço de entrega está correto no seu perfil.\n 2. Alguém estará disponível no local para receber o pacote.\n 3. O código de rastreamento enviado por e-mail já está ativo. Atenciosamente,\n Equipe de Suporte e Atendimento ao Cliente.";

$linguagens = 'HTML, CSS, JS, PHP, PYTHON, SQL';
$listaLinguagens = explode(', ', $linguagens);
?>
<body>

<p><?= $frase ?></p>
<p><?= $frase2 ?></p>

<p><?= strip_tags($codigoHtml) ?></p>
<p><?= trim($fraseComEspacos) ?></p>
<p><?= nl2br($fraseParaQuebra) ?></p>
<pre><?= nl2br($fraseParaQuebra) ?></pre>

<?php foreach($listaLinguagens as $linguagem): ?>
    <p><?= $linguagem ?></p>
<?php endforeach; ?>
</body>
</html>