<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $login = $_POST["login"];
        $senha = $_POST["senhavalida"];

        $sqllogin = "SELECT email FROM cliente";
        $sqlsenha = "SELECT senha FROM cliente";

        $resultlogin = $conexao->query($sqllogin);
        $resultsenha = $conexao->query($sqlsenha);
         
        #print_r($resultlogin);
        #print_r($resultsenha);

        if($sqllogin == $login && $sqlsenha == $senha){
            header('Location: config.php');
        }else{

        echo "ERRO DE LOGICA";
        
        }
        
    } 
?>