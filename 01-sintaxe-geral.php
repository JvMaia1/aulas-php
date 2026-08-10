<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe geral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .exemplo{
            border: solid 4px;
            padding: 4px;
            color: <?php echo 'orange;' ?>
        }
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>
    <?php
        echo "Estou estudando a linguagem PHP para back-end";
        echo '<p style="font-size: 30px; color: red;">Este é um paragrafo gerado com php</p>';
        echo '<p class="exemplo">Este é um paragrafo gerado com php</p>';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        const tituloh1 = document.querySelector("h1");
        
        tituloh1.addEventListener("click", function(){
            alert('<?php echo "Hello World"; ?>')
        });
    </script>

</body>
</html>