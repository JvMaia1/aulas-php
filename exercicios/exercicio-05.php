<?php
$alunos = [
    'pedro' => [7, 7, 8],
    'carlos' => [5, 4, 9],
    'luiz' => [3, 2, 10],
    'fernando' => [9, 7, 4],
    'abud' => [5, 8, 10]
];

function calcularMedia(array $notas):float
{
    $total = 0;
    $qtdNotas = count($notas);

    foreach ($notas as $nota) {
        $total += $nota;
    }

    return round($total / $qtdNotas, 2);
}

function verificarSituacao(float $media): string
{
    if ($media < 7) {
        return 'reprovado';
    } else {
        return 'aprovado';
    }
}
?>
<?php include '../components/header.php'; ?>
<body>
    <h1>Exercicio 5</h1>
    <hr>

    <?php 
    foreach ($alunos as $aluno => $notas):
        $classe = 'bg-danger p-3';
        $media = calcularMedia($notas);
        $situacao = verificarSituacao($media) ;
        if($situacao ===  'aprovado'){
            $classe = 'bg-success p-3';
        };
    ?>
    <p class="container <?=  $classe?>">O aluno: <?= $aluno ?> está <?= $situacao ?> com <?= $media ?> de média</p>
    <?php endforeach; ?>
    
    
</body>
</html>