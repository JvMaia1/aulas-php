<?php
$listaNumeros = [10, -5, 12, 150, 0, 1236.45];

$data = date('d/m/Y');
$hora = date('H:i:s');
$dataHora = date('d/m/Y H:i:s');

$dataFormatoBD = '2020-09-11';
$dataFormatada = date('d/m/Y', strtotime($dataFormatoBD))
?>
<?php include '../components/header.php'; ?>

<body>
    <main class="container pt-4">
        <h1>Funções nativas: numeros, data e hora.</h1>
        <hr>
        <h2>Números:</h2>
        <section class="bg-secondary p-3 border border-dark border-4 rounded-3">
            <h3 class="text-center">max(), min()</h3>
            <p>Maior valor na lista passada: </p>
            
            <div class="bg-dark text-white p-3 pt-4 rounded-3">
                <pre><code> $listaNumeros = [10, -5, 12, 150, 0 ,1236.45]</code></pre>
                <pre><code> max($listaNumeros)</code></pre>
                <p class="text-success">Saida: <?= max($listaNumeros) ?></p>
                <hr>
                <pre><code> min($listaNumeros)</code></pre>
                <p class="text-success">Saida: <?= min($listaNumeros) ?></p>
            </div>
            <hr>

            <h3 class="text-center">round(), ceil(), floor(), rand()</h3>
            <div class="bg-dark text-white p-3 my-4 py-4 rounded-3">
                <h4>round() arredonda pra extremidade mais proxima</h4>
                <pre><code>round(4.7)</code></pre>
                <p class="text-success">Saida: <?= round(4.7) ?></p>
                <pre><code>round(4.4)</code></pre>
                <p class="text-success">Saida: <?= round(4.4) ?></p>
                <hr>

                <h4>Arredonda pra baixo sempre</h4>
                <pre><code>floor(4.7)</code></pre>
                <p class="text-success">Saida: <?= floor(4.7) ?></p>
                <hr>

                <h4>Arredonda pra cima sempre</h4>
                <pre><code>ceil(4.7)</code></pre>
                <p class="text-success">Saida: <?= ceil(4.7) ?></p>
                <hr>
            
                <h4>Gera um número aleatorio dentro do range indicado</h4>
                <pre><code>rand(4.7, 10.5)</code></pre>
                <p class="text-success">Saida: <?= rand(4.7, 10.5) ?></p>
                <hr>
            
            </div>
        </section>
        <hr>
        <h2>Data e hora:</h2>
        <section class="bg-secondary p-3 border border-dark border-4 rounded-3">
            <h3>date(), date_default_timezone_set(), strtotime().</h3>
            
            <div class="bg-dark text-white p-3 my-4 py-4 rounded-3">
                <code>
                    $data = date('d/m/Y');
                    $hora = date('H:i:s');
                    $dataHora = date('d/m/Y H:i:s');
                </code>
                
                <div class="text-success">
                    <p>Data: <?= $data ?></p>
                    <p>Hora: <?= $hora ?></p>
                    <p>Data e hora: <?= $dataHora ?></p>
                </div>
                <hr>

                <code>
                    $dataFormatoBD = '2020-09-11';
                    $dataFormatada = date('d/m/Y', strtotime($dataFormatoBD))
                </code>

                <p class="text-success">Data formatada: <?= $dataFormatada ?></p>
            </div>
        
        </section>
    </main>
</body>
</html>