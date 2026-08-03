<?php 
$data = "29/07/26";
$nome = "Cleisson";
const CURSO = "Designer UX/UI";
const CURSO2 = "IA avançada";
const CARGA = 500;
$limiteFaltas = CARGA/4;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>                          
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
        .deco{
            background-color: beige;
            padding: 5px;
            border: black solid 5px;
            text-align: center;
            transform: scale(0.9);
            &:hover{ transform: scale(1) }
        }
    </style>
</head>
<body>
    <header>
        <h1 style="color: red">Exercicio 01</h1>
        <hr>
    </header>
    <main class="deco">
        <p><?= $data ?></p>
        <p>Nome: <?= $nome ?></p>
        <p id="curso">Cursando: <?= CURSO ?></p>
        <p>Carga horaria: <?= CARGA ?>H</p>
        <p>Limite de faltas: <?= $limiteFaltas ?>H</p>
        <button>Trocar curso</button>
        <br><br>

        <form id="formulario">
        
        <label>Nome:</label>
        
        <input type="text" id="nome" required>
        <br><br>
        <label>Email:</label>
        
        <input type="email" id="email" required>
        <br><br>
        
        <button type="submit">Salvar</button>
        
        </form>

</main>

</body>

<script>
    let formulario = document.querySelector("formulario")
    let nome = document.querySelector("nome")
    let email = document.querySelector("email")
    let botao = document.querySelector("button")
    let curso = document.querySelector("#curso")
    botao.addEventListener("click", function(){
        if (curso.textContent == "<?= CURSO ?>"){

            curso.textContent = "<?= CURSO2 ?>"
        
        } else {
            curso.textContent = "<?= CURSO ?>"
        }
    });

    formulario.addEventListener("submit", function(event){
        event.preventDefault();
        nome.value;
        email.value;
    });
</script>
</html>
