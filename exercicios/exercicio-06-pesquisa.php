<?php
date_default_timezone_set('America/Sao_paulo');
$data = getdate();
?>
<?php
$exemplos = glob('../exemplos/*.php');
$exercicios = glob('../exercicios/*.php');
$listaVazia = count($exemplos) === 0 || count($exercicios) === 0;
if ($listaVazia) {
    $exemplos = glob('exemplos/*.php');
    $exercicios = glob('exercicios/*.php');
}
$index = '../index.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnico em informatica para internet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <?php if (isset($css_interno)): ?>
    <style>
        <?= $css_interno ?>
    </style>
    <?php endif; ?>
</head>

<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="<?= $index ?>">Técnico em informatica para internet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Aulas PHP</a>
        <ul class="dropdown-menu">
            
            <?php foreach ($exemplos as $pagina): ?>
            <li><a class="dropdown-item" href="<?= $pagina ?>"><?= $pagina ?></a></li>
            <?php endforeach; ?>
            
            <li><hr class="dropdown-divider"></li>
            
            <?php foreach ($exercicios as $pagina): ?>
            <li><a class="dropdown-item" href="<?= $pagina ?>"><?= $pagina ?></a></li>
            <?php endforeach; ?>
        </ul>

        </li>
    </ul>
    </div>
</div>
</nav>
</header>
<body>
<main class="container">
    <h1>Funções de data e hora</h1>
    <hr>

    <h2>time()</h2>
    <div class="bg-dark text-white my-3 p-3 pt-4 rounded-3">
        <code>time()</code>
        <p class="text-success">Saida: <?= time() ?></p>
        <p>time() retorna a 'hora' atual em segundos passados desde 01/01/1970 00:00:00 </p>

        <hr>

        <p>Com esse dados de quanto segundos se passaram você consegue usa date() combinado com sua timezone para formatar a hora atual com precisão</p>
        <code>date_default_timezone_set('America/Sao_paulo')</code>
        <br>
        <code>date('d/m/Y', time())</code>
        <p class="text-success">Saida: <?= date('d/m/Y H:i:s', time()) ?></p>
        <p><i>Essa função não recebe parametros</i></p>

        <hr>

    </div>

    <h2>getdate()</h2>
    <div class="bg-dark text-white my-3 p-3 pt-4 rounded-3">
        <p>Essa função retorna uma lista associativa com varios dados relacionados a data atual como segundos, minutos, horas e etc.</p>
        <code>getdate()</code>
        <p class="text-success">[</p>
        <?php foreach ($data as $nome => $dado): ?>
        <p class="text-success px-3"><?= $nome ?>: <?= $dado ?>,</p>
        <?php endforeach; ?>
        <p class="text-success">]</p>
        <p><i>Essa função tem um parâmetro <u>opcional</u> <b>'timstamp'</b></i> que deve contar a data em segundos passados após 01/01/1970</p>
        <p>esse parâmetro deve ser inteiro e se for omitido recebera time() como padrão</p>
    </div>

    <h2>mktime()</h2>
    <div class="bg-dark text-white my-3 p-3 pt-4 rounded-3">
        <p>Essa função recebe parametros de hora, minuto, segundo, mês, dia e ano</p>
        <p>Ela retorna (assim como time()) a quantidade de segundos que se passaram desde 01/01/1970, porem até o momento especificado com os parâmetros que você enviou</p>
        <code>mktime(3,0,0,10,18,2001)</code>
        <p class="text-success"><?= mktime(3, 0, 0, 10, 18, 2001) ?></p>
        <code>date('d/m/Y H:i:s',mktime(3,0,0,10,18,2001))</code>
        <p class="text-success"><?= date('d/m/Y H:i:s', mktime(3, 0, 0, 10, 18, 2001)) ?></p>
    </div>

    <h2>checkdate()</h2>
    <div class="bg-dark text-white my-3 p-3 pt-4 rounded-3">
        <p>Essa função recebe parâmetros de mês, data e ano</p>
        <p>Ela retorna <b class="text-success">true</b> se a data for valida, ou seja se aquele dia está correto de fato de acordo com o calendario gregoriano</p>
        <p>Usaremos 18/10/2001</p>
        
        <code>checkdate(10,18,2001)</code>
        
        <p> a data está correta então retorna true <b class="text-success"><?php var_dump(
            checkdate(10, 18, 2001)
        ); ?></b></p>
        
        <code>checkdate(13,18,2001)</code>
        
        <p> a data está <b>incorreta</b> (mês 13 não existe) então retorna false <b class="text-success"><?php var_dump(
            checkdate(13, 18, 2001)
        ); ?></b></p>
    </div>
</main>
</body>
</html>