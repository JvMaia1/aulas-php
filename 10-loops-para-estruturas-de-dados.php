<?php
$meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'];
$planoDeEstudos = [
    ['Js avançado', 'Node.js', 'next.js'],
    ['PHP', 'Orientação a objetos'],
    ['Teoria das cores', 'Photoshop Com Ia', 'UX/UI']
];
$curso = [
    'titulo' => 'Gastronomia',
    'carga_horario' => 200,
    'descricao' => 'aprender o básico sobre cozinha'
];
$clientes = [
    [
        'nome' => 'Juliene',
        'email' => 'juliene@gmail.com'
    ],
    [
        'nome' => 'Juliano',
        'email' => 'juliano@gmail.com'
    ]
];
?>
<?php include('components/header.php'); ?>
<body>
    <div class="container">
        <h1>Loops para estruturas de dados</h1>
        <hr>

        <h2>Usando o loop for para acessar o array</h2>
        
        <ol>
        <?php for ($i = 0; $i < count($meses); $i++): ?>
            <li><?= $meses[$i] ?></li>
        <?php endfor; ?>
        </ol>
        
        <h2>Usando o loop for para acessar o matriz</h2>
        <?php
        $linhas = count($planoDeEstudos);

        for ($i = 0; $i < $linhas; $i++):
            $colunas = count($planoDeEstudos[$i]);
            for ($j = 0; $j < $colunas; $j++): ?>
            <p><?= $planoDeEstudos[$i][$j] ?></p>
            <?php endfor;
        endfor;
        ?>
        
        <h2>Usando o loop for each para acessar o matriz</h2>
        
        <?php foreach ($planoDeEstudos as $linhas) {
            foreach ($linhas as $coluna) { ?>
        <p><?= $coluna ?></p>
        <?php }
        } ?>
        
        <h2>Usando o loop foreach para acessar o lista associativa e coletar a chave</h2>

        <?php foreach ($curso as $chave => $valor): ?>
            <p><b><?= $chave ?></b>: <?= $valor ?></p>
        <?php endforeach; ?>
        
        <h2>usando foreach em array associativo</h2>
        <hr>
        <?php foreach ($clientes as $cliente): ?>
            <div class="">
                <p>Nome: <?= $cliente['nome'] ?></p>
                <p>Email: <?= $cliente['email'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>