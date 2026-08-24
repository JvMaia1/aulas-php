<?php
// 1. O servidor acha os arquivos no disco
$raiz = dirname(__DIR__); 

$exemplos = glob($raiz . '/exemplos/*.php');
$exercicios = glob($raiz . '/exercicios/*.php');

$base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\') . '/';

$pagina = Basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnico em Informática para Internet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      .card-escuro {
        background-color: var(--bs-dark);
        color: var(--bs-white);
        padding: var(--bs-spacer-3);
        padding-top: var(--bs-spacer-4);
        border-radius: var(--bs-border-radius-3);
      }
      <?php if(isset($css_interno)): ?>
      <?= $css_interno ?>
      <?php endif ?>
    </style>
</head>

<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= $base_url ?>index.php">Técnico em Informática</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Aulas PHP</a>
          <ul class="dropdown-menu">
            
            <!-- EXEMPLOS -->
            <?php foreach ($exemplos as $caminho): ?>
              <?php $nome = basename($caminho); ?>
              <li><a class="dropdown-item" href="<?= $base_url ?>exemplos/<?= $nome ?>"><?= str_replace('-', ' - ', basename($nome, '.php')) ?></a></li>
            <?php endforeach; ?>
            
            <li><hr class="dropdown-divider"></li>
            
            <!-- EXERCÍCIOS -->
            <?php foreach ($exercicios as $caminho): ?>
              <?php $nome = basename($caminho); ?>
              <li><a class="dropdown-item" href="<?= $base_url ?>exercicios/<?= $nome ?>"><?= str_replace('-', ' - ', basename($nome, '.php')) ?></a></li>
            <?php endforeach; ?>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>


<!-- <?php var_dump($_SERVER['PHP_SELF']) ?>
<br>
<?php var_dump($_SERVER['SCRIPT_NAME']) ?>
<br>
<?php var_dump(dirname($_SERVER['SCRIPT_NAME'])) ?>
<br>
<?php var_dump(dirname(dirname($_SERVER['SCRIPT_NAME']))) ?>
<br>
<?php var_dump(rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])))); ?>
<br>
<?php var_dump(rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\') . '/') ?>
<?= $pagina ?>
-->
