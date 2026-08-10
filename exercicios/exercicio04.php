<?php
$linguagens = [
    'html' => 'Base e o esqueleto de textos, imagens e campos de entrada de dados na página.',
    'css' => 'Define cores, fontes, tamanhos e o visual geral do site.',
    'javascript' => 'Anima elementos e gerencia interações rápidas direto no navegador do usuário.',
    'php' => 'Processa informações no servidor e torna a pagina dinamica',
    'mysql' => 'Guarda permanentemente os dados do sistema, como cadastros e mensagens'
];

$mapaNomes = [
    'html' => 'HTML',
    'css' => 'CSS',
    'javascript' => 'JavaScript',
    'php' => 'PHP',
    'mysql' => 'MySql',
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-body-tertiary">
    <header class="bg-dark-subtle">
        <h1 class="p-5">Estruturas de repetição (loops) e estruturas de dados</h1>
        <hr>
    </header>
    <main class="container">
        <table class="table table-secondary">
            <thead>
            <tr class="table-dark">
                <th scope="col">ID</th>
                <th scope="col">Linguagem</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <?php 
            $i = 0;
            foreach($linguagens as $nome => $descricao):
        ?>

        <tbody>
            <tr>
                <th  class="table-dark" scope="row"><?= $i+1 ?></th>
                <td  class="table-dark px-3"><?= $mapaNomes[$nome] ?></td>
                <td><?= $descricao ?></td>
            </tr>
        </tbody>
        <?php 
            $i++;
            endforeach;
        ?>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </main>
</body>
</html>