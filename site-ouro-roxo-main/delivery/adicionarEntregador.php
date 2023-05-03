<?php
    if(isset($_POST['submit']))
    {
        /*print_r($_POST['nome']);
        print_r($_POST['telefone']);
        print_r($_POST['CNH']);
    */
    include_once('config.php');

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $CNH = $_POST["CNH"];

    $result = mysqli_query($conexao, "INSERT INTO entregador(idEntregador,nome,cnh,telefone)
    VALUES ('default','$nome','$CNH','$telefone')");

header('Location: delivery.php');
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
            <h2>Adicionar Entregador</h2>
            <a href="delivery.php">Voltar</a>
        </header>
        
        <form action="adicionarEntregador.php" method="POST">
            <input type="text" name="nome" placeholder="Nome">
            <input type="tel" name="telefone" placeholder="Telefone">
            <input type="number" name="CNH" placeholder="CNH">
    
            <button type="submit" name="submit" >Cadastrar</button> 
        </form>
            
    </div>


</body>
</html>