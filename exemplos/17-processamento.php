<?php 
$semDados = false;
//listas de opçoes validas
$interessesValidos = ['html', 'css', 'javascript'];
$informativosValdos = ['sim', 'nao'];
$filtroIdade = [
    "options" => [
        "max_range" => 0,
        "min_range" => 130,
    ]
];
$erros = [];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    //captura os dados apenas se a requisição post for feita
    $nomeCompleto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $idade =  filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    
    $interesses = filter_input(INPUT_POST, 'interesses', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];
    
    $informativos = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_SPECIAL_CHARS);
    $informativos = in_array($informativos, $informativosValdos) ? $informativos : 'nao';

    if(!is_array($interesses)){
        $interesses = [];
        $erros[] = 'Seleção inválida de interesses';
    };
    // compara os dois arrays, checando se os valores batem.
    $interessesValidados = array_intersect($interesses, $interessesValidos);

    } else {$semDados = true;}
    foreach(compact([$nomeCompleto, $email, $mensagem]) as $campo => $valor){
        if(empty($valor)){
            $erros[] = "O {$campo} é obrigatorio";
        };
    };

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = 'O e-mail não é valido';
    if(!filter_var($idade, FILTER_VALIDATE_INT, $filtroIdade)) $erros[] = 'A idade não é valida';
?>
<?php include '../components/header.php'?>

<body>
<?php if(!$semDados): ?>
<div class="container">
    <h1>Recebimento e processamento dos dados</h1>
    <hr>
    <div>

        <?php if(!empty($erros)): ?>
        <ul class="mb-3">
        <?php foreach($erros as $erro): ?>
            <li><?= $erro ?></li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <p>Nome: <?= $nomeCompleto ?></p>
        <p>Email: <?= $email ?></p>
        <p>Idade: <?= $idade ?> anos</p>
        <?php if(!empty($interessesValidados)):?>
            <p>Interesses: <?= implode($interessesValidados) ?? [] ?></p>
        <?php endif; ?>
        <p>informativos: <?= $informativos === 'nao' ? 'Não' : 'Sim'?></p>
        <p>Mensagem: <?= $mensagem ?></p>
    </div>    
<?php else: ?>
    <!-- Acesso inválido (usuário não veio do formulário) -->
    <div class="container m-5 alert alert-danger">
        <h2>Acesso inválido!</h2>
        <p>Você deve usar o formulário para enviar os dados.</p>
        <hr>
        <a href="17-formulario.php" class="btn btn-primary">Ir para o formulário.</a>
    </div>
<?php endif; ?>
</div>
</body>
</html>