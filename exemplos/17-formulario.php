<?php 
$css_interno = "
    body{
    color: white;
    }
"
?>
<?php include'../components/header.php'?>

<body class="bg-dark">
<div class="container pt-4">
    <h1>Formulário HTML e processamento externo com PHP</h1>
    <hr>
    <div class="p-2">
        <form action="17-processamento.php" method="post">
            <label class="form-check-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">
    </div>

    <div class="p-2">
        <label class="form-check-label" for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email">
    </div>
    <div class="p-2">
        <label class="form-check-label" for="idade">Idade:</label>
        <input class="form-control" type="number" name="idade" id="idade" min="1" max="130">
    </div>
    
    <div>
        <p>Interesses:</p>
        <div>
            <input class="form-check-input" type="checkbox" name="interesses[]" id="typescript" value="typescript">
            <label class="form-check-label" for="typescript">TypeScript</label>
        </div>

        <div>   
            <input class="form-check-input" type="checkbox" name="interesses[]" id="css" value="css">
            <label class="form-check-label" for="css">CSS</label>
        </div>

        <div>
            <input class="form-check-input" type="checkbox" name="interesses[]" id="javascript" value="javascript">
            <label class="form-check-label" for="javascript">JavaScript</label>
        </div>
    </div>

    <div class="mb-3">
        <p class="mb-2">Deseja receber informativos?</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="informativos" id="sim" value="sim">
            <label class="form-check-label" for="sim">Sim</label>
        </div>
        
        <div>
            <input class="form-check-input" type="radio" name="informativos" id="nao" value="nao">
            <label class="form-check-label" for="nao">Não</label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="mensagem">Mensagem:</label>
        <textarea class="form-control" name="mensagem" id="mensagem" rows="6"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Enviar dados</button>

    
    </form>
</div>
</body>
</html>