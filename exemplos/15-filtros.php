<?php include '../components/header.php' ?>
<body>
<main class="container">
    <h1>Filtros para validação e sanitização</h1>
    <hr>
    <p>Filtros são recursos de análise e limpeza de dados aplicados através de funções especiais, normalmente as funçoes <code>filter_var()</code> e <code>filter_input()</code> e também com o uso de <b>constantes</b> de validação/sanitização </p>

    <h2>Validação</h2>
    <div class="bg-dark text-white p-3 pt-4 rounded-3">
        <h3>FILTER_VALIDATE_EMAIL</h3>
        <?php 
        $email = ': email @provador. coton';
        $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
        ?>
        
        <code>  
            $email = ': email @provador. coton';
            $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
        </code>

        <p><?php var_dump($emailValido) ?></p>
        
        <h3>FILTER_VALIDATE_URL</h3>
        <?php 
        $redeSocial = 'httmplinkedas.com';
        $redeSocialValida = filter_var($redeSocial, FILTER_VALIDATE_URL);
        ?>
        <hr>

        <h3>VALIDATE_SANITIZE_EMAIL</h3>
        <?php 
        $contato = 'emai l@ aaa,..comt';
        $contatoSanitizado = filter_var($contato, FILTER_SANITIZE_EMAIL);
        ?>
        <p><?= $contato ?></p>
        <p><?= $contatoSanitizado ?></p>
        <hr>

        <h3>FILTER_SANITIZE_FULL_SPECIAL_CHARS<h3>
        <?php 
        $nomeCompleto = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHyzZjjn5yyqeqbvvPTeJUryxasOd-3ASYd1ERtqSsm_G5jkSoHjTfmnWjDwNXRANzlv8CAi5baAgEcMLqzdAWerIz1MwBrxbh_rMmEP4&s=10'";
        $nomeSanitizado = filter_var($nomeCompleto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        ?>
        <p class="fs-6"><?= $nomeSanitizado ?></p>

        <?php 
        //simulando um ataque de injeção de codigo js XSS 
        $ataqueXSS = "<script>location = 'https://sp.senac.br'</script>";

        ?>

        <p class="fs-6">teste <?= filter_var($ataqueXSS,FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></p>

        <h3>html especial chars</h3>
        <?php 
        $nomeCompletoCorrigido = htmlspecialchars($nomeCompleto);
        $ataqueEvitado = htmlspecialchars($ataqueXSS);
        ?>

        <p><?= $ataqueEvitado ?></p>
        <p><?= $nomeCompletoCorrigido ?></p>

    </div>

</main>
</body>
</html>