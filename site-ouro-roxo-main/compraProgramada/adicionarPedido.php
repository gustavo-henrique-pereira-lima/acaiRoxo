<?php
    
    if(isset($_POST['submit']))
    {
        /*print_r($_POST['nome']);
        print_r($_POST['telefone']);
        print_r($_POST['CNH']);
    */
    
    include_once('config.php');

   
    $nome = $_POST["nome"];
    $produto = $_POST["produto"];
    

    $result = mysqli_query($conexao, "INSERT INTO pedido(idPedido,Cliente,Produto)
    VALUES ('default','$nome','$produto')");
    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açai ouro roxo</title>
    <link rel="shortcut icon" href="img/icone-açaiouroroxo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/acaiRoxo/assets/adicionarEntregador.css">
</head>
<body>
<!---------------------------------------------------Geral------------------------------------------------------->
    <div class="cantainer">
        <header>
            <h2>Adicionar</h2>
            <a href="programar.php">Voltar</a>
        </header>
        
        <form action="adicionarPedido.php" method="POST">
            <input type="number" name="nome" placeholder="Digite o ID do cliente">
            <input type="number" name="produto" placeholder="Digite o ID do Produto">
            
    
            <button type="submit" name="submit" >Adicionar pedido</button> 
        </form>
            
    </div>


</body>
</html>