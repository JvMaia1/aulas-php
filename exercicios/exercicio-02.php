<?php
$usuario1 = new stdClass();

$usuario1->nome = 'Simon18@';
$usuario1->email = 'simon@gmail.com';
$usuario1->senha = '123456';
$usuario1->idade = 18;
$usuario1->sexo = 'Masculino';
$usuario1->cidade = 'São paulo';

$usuario2 = [
    'nome' => 'TiaoDaRoça',
    'email' => 'tiao@gmail.com',
    'senha' => '654321',
    'idade' => 58,
    'sexo' => 'Masculino',
    'cidade' => 'Santa catarina'
];
$css_interno = "
    main{
        display: flex;
        justify-content: space-around;
    }

    .usuario{
        margin: 50px;
        text-align: center;
        flex: 1 1 40%;
        background-color: bisque;
        padding: 2rem;
        border-radius: 1rem;
    }

    #usuario2{
        background-color: cornflowerblue;
    }
"
?>
<?php include('../components/header.php'); ?>
<body>
    <h1>Exercicio 02</h1>
    <hr>

    <main>
        <section class="usuario">
            <h3><?= $usuario1->nome ?> - <?= $usuario1->idade ?> Anos</h3>
                <p>
                    <a href="mailto:<?= $usuario1->email ?>">
                        <?= $usuario1->email ?>
                    </a>
                </p>
        </section>
        
        <section class="usuario" id="usuario2">
            <h3><?= $usuario2['nome'] ?> - <?= $usuario2['idade'] ?> Anos</h3>
                <p>
                    <a href="mailto:<?= $usuario2['email'] ?>">
                        <?= $usuario2['email'] ?>
                    </a>
                </p>
        </section>
    </main>

    
</body>
</html>