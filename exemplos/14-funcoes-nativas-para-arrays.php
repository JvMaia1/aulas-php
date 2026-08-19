<?php
$bandas = ['Pink floyd', 'Genesis', 'Yes'];
$aluno = [
    'id' => 1,
    'nome' => 'Fulano',
    'idade' => 20
];
$carrinhoDeCompras = [
    'vv_led' => 1200,
    'ultrabook' => 2500,
    'geladeira' => 4000,
];
$categorias = [
    'eletronicos',
    'roupas',
    'eletronicos'
];
$games = [
    'Super_mario',
    'Final_fantasy',
    'The_Witcher'
];
$servicos = [
    ["codigo" => 3, "tipo" => "Limpeza", "status" => "Concluído"],
    ["codigo" => 12, "tipo" => "Manutenção", "status" => "Concluído"],
    ["codigo" => 1, "tipo" => "Reparo", "status" => "Pendente"],
    ["codigo" => 7, "tipo" => "Consultoria", "status" => "Concluído"],
    ["codigo" => 4, "tipo" => "Instalação", "status" => "Concluído"]
];
$precos = [20, 40, 60];
extract($aluno);
$id = 'id' . $aluno['id'];
extract($aluno, EXTR_PREFIX_ALL, $id);
?>
<?php include'../components/header.php'?>
<body>
<main class="container">
    <h1 class="pt-3">Funções nativas para arrays</h1>
    <hr>
    
    <h2>implode()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <p>Transforma array em uma string</p>
        <code>$bandas = ['Pink floyd', 'Genesis', 'Yes']</code>
        <br>
        <code>implode(' - ', $bandas)</code>
        <p class="text-success"><?= implode(' - ', $bandas) ?></p>
    </div>

    <h2>extract()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <p>Extrai chaves associativas para variaveis</p>
        <code>
            $aluno =[
                'id' => 1,
                'nome' => 'Fulano',
                'idade' => 20
            ]
        </code>
        <br>
        <code>extract($aluno)</code>
        <p class="text-success">$id: <?= $id ?></p>
        <p class="text-success">$nome: <?= $nome ?></p>
        <p class="text-success">$idade: <?= $idade ?></p>

        <p>Para evitar sobrescrever variaveis já existentes use o <b>EXTR_PREFIX_ALL</b></p>
        
        <code>
            $id = 'id' . $aluno['id'];<br>
            extract($aluno, EXTR_PREFIX_ALL, $id);
        </code>
        <p class="text-success">$id: <?= $id1_id ?></p>
        <p class="text-success">$nome: <?= $id1_nome ?></p>
        <p class="text-success">$idade: <?= $id1_idade ?></p>
    </div>
    
    <h2>array_sum()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <p>Soma o total dos valores de um array</p>
        <code>
            $carrinhoDeCompras = [<br>
            'vv_led' => 1200,<br>
            'ultrabook' => 2500,<br>
            'geladeira' => 4000,<br>
            ];
        </code>
        <br><br>
        <code>array_sum($carrinhoDeCompras)</code>
        <p class="text-success"><?= array_sum($carrinhoDeCompras) ?></p>
    </div>

    <h2>array_unique()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <p>Gera um novo array removendo elementos duplicados</p>
        <code>
            $categorias = [
            'eletronicos',
            'roupas',
            'eletronicos'
            ];
        </code>
        <br>
        <code>array_unique($categoriasUnicas)</code>
        <><?php var_dump(array_unique($categorias)) ?></p>
    </div>
    
    <h2>array_merge()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <p>Une duas listas em uma</p>
        <code>array_merge($aluno, $carrinhoDeCompras)</code>
        <p><?php var_dump(array_merge($aluno, $carrinhoDeCompras)) ?></p>
    </div>

    <h2>array_combine()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <p>Cria um novo array apartir de uma lista de chaves e uma lista de valores</p>
        <?php $listaGames = array_combine($games, $precos)?>
        <?php var_dump($listaGames) ?>

    </div>

    <h2>array_map()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <?php $catologoComDesconto = array_map(fn($preco) => $preco - $preco * 0.1 ,$listaGames) ?>
        <?php var_dump($catologoComDesconto) ?>
    </div>

    <h2>array_column</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <?php
            $tipoServicos = array_column($servicos, 'tipo');
        ?> 

        <pre><?php var_dump($tipoServicos) ?></pre>
    </div>

    <h2>array_filter()</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <p>retorna valores que atendam uma condição</p>
        <?php 
        $servicosConlcuidos = array_filter($servicos, fn($servico) => $servico['status'] === 'Concluído')
        ?>

        <pre><?php var_dump($servicosConlcuidos) ?></pre>
    </div>
</main>
</body>
</html>