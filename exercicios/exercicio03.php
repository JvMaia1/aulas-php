<?php 
$mapaValoresIngresso = [
    "infantil" => 25,
    "adulto" => 40,
    "idoso" => 20
    ];
            
function checarCategoria(int $idade): string{
    if($idade < 12){
        return "infantil";
    } elseif($idade < 60) {
        return "adulto";
    } else {
        return "idoso";
    };
};
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - valor ingresso</title>
    <style>
        .card{
            padding: 1rem;
            border-radius: 5px;
            margin-block: 1rem;
        }

        .card#idoso{
            background-color: wheat;

        }
        
        .card#adulto{
            background-color: green;

        }

        .card#infantil{
            background-color: aliceblue;

        }
    </style>
</head>
<body>
    <h1>Exercicio 03</h1>
    <hr>

<?php 

    $pessoas = [
        $pessoa1 = [
            "nome" => "Clotilde",
            "idade" => 71,
            "categoriaIngresso" => checarCategoria(71)
        ],

        $pessoa2 = [
            "nome" => "Amanda",
            "idade" => 35,
            "categoriaIngresso" => checarCategoria(35)
        ],

        $pessoa3 = [
            "nome" => "Carlinhos",
            "idade" => 11,
            "categoriaIngresso" => checarCategoria(11)
        ]
    ];
?>

<?php foreach($pessoas as $pessoa){ ?>
    <section class="card" id="<?= $pessoa["categoriaIngresso"] ?>">
        <p>Nome: <?= $pessoa["nome"] ?></p>
        <p>Idade: <?= $pessoa["idade"] ?> anos</p>
        <p>Valor ingresso: <?= "R$ ".number_format($mapaValoresIngresso[$pessoa["categoriaIngresso"]], 2) ?></p>
    </section>
<?php }; ?>
    
</body>
</html>