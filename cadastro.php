<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACESSO</title>
    <link rel="stylesheet" href="estilo copy.css">
</head>
<body>
    <main>
        <div class="container">
            <h2>Cadastro realizado com sucesso!</h2>
       
        <?php 
 
            $nome = $_GET["nome"];
            
            echo "É um prazer ter você aqui $nome ";
            
        ?>
         </div>
         <center>
         <a href="index.html">Voltar à pagina anterior</a>
         </center>
    </main>
    
</body>
</html>