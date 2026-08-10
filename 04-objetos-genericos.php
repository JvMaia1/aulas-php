<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos genéricos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Trabalhando com objetos/instâncias</h1>
    <hr>

<?php
// Criando objeto/instância a partir da classe stdClass (Standar Class)
$usuario = new stdClass; 

//Adicionando propriedades/atributos ao objeto

$usuario -> codigo = 1;
$usuario -> nome = "Jon Oliva";
$usuario -> email = "jonoliva1@gmail.com";
$usuario -> idade = 70;
$usuario -> telefones = ["119999-9999", "118888-8888"] ;
$usuario -> endereco = [
    "logradouro" => "xyz",
    "numero" => "123A",
    "bairro" => "Penha",
    "cep" => "03639-000"
    ] ;
$usuario -> caracteristicas = new stdClass;
$usuario -> caracteristicas -> peso = 80;
$usuario -> caracteristicas -> altura = 172;

?>

<h2>Análise da estrutura</h2>
<pre><?php var_dump($usuario) ?></pre>

<h2>Acessando e exibindo os dados do objeto</h2>
<ul>
    <li>
        Nome: <?= $usuario -> nome ?>
    </li>
    
    <li>E-mail: 
        <a href="mailto:<?= $usuario -> email ?>">
            <?= $usuario -> email ?>
        </a>
    </li>

    <li>
        Celular: 
        <a href="tel:+<?= $usuario -> telefones[0] ?>">
            <?= $usuario -> telefones[0] ?>
        </a>
    </li>

    <li>
        Bairro <?= $usuario -> endereco["bairro"] ?>
    </li>

    <li>
        Peso: <?=  $usuario -> caracteristicas -> peso ?>KG
    </li>
</ul>

<h2>Convertendo objeto em array</h2>
<?php 
$pedido = new stdClass;

$pedido -> numero = "234abc";
$pedido -> valor_total = 1234.6;
$pedido -> entrega = 7;

$arrayPedido= (array) $pedido // casting (conversão)
?>  
    <pre><?php var_dump($pedido) ?></pre>
    <pre><?php var_dump($arrayPedido) ?></pre>

<h2>Convertendo array em objeto</h2>
<?php 
$curso = [
    "titulo" => "PHP básico",
    "carga_horaria" => 40,
    "categoria" => "Back-end"
];

$objetoCurso = (object) $curso;
?>
    <pre><?php var_dump($curso) ?></pre>
    <pre><?php var_dump($objetoCurso) ?></pre>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>