<?php
    

    if(isset($_POST['registrar']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['senha']);
    
    include_once('config.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $result = mysqli_query($conexao, "INSERT INTO cliente(idCliente,nome,email,senha)
    VALUES ('default','$nome','$email','$senha')");
        echo "INPUT FEITO COM SUCESSO!";
    } else{
      echo "ERROR";
    }
    
header('Location: index.html');

?>