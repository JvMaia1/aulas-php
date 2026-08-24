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
    'mysql' => 'MySql'
];
?>
<?php include('../components/header.php'); ?>
<body class="bg-body-tertiary">
    <h1 class="p-5">Estruturas de repetição (loops) e estruturas de dados</h1>
    <hr>

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
        foreach ($linguagens as $nome => $descricao): ?>

        <tbody>
            <tr>
                <th  class="table-dark" scope="row"><?= $i + 1 ?></th>
                <td  class="table-dark px-3"><?= $mapaNomes[$nome] ?></td>
                <td><?= $descricao ?></td>
            </tr>
        </tbody>
        <?php $i++;endforeach;
        ?>
        </table>
    </main>
</body>
</html>