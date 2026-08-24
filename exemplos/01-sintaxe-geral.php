<?php $css_interno = "
    .exemplo{
        border: solid 4px;
        padding: 4px;
        color: orange;
    }
    "
?>

<?php include('../components/header.php'); ?>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>
    <?php
    echo 'Estou estudando a linguagem PHP para back-end';
    echo '<p style="font-size: 30px; color: red;">Este é um paragrafo gerado com php</p>';
    echo '<p class="exemplo">Este é um paragrafo gerado com php</p>';
    ?>

    <script>
        const tituloh1 = document.querySelector("h1");
        
        tituloh1.addEventListener("click", function(){
            alert('<?php echo 'Hello World'; ?>')
        });
    </script>

</body>
</html>