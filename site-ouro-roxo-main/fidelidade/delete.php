<?php
    if(!empty($_GET['idCliente']))
    {
        include_once('config.php');

        $id = $_GET['idCliente'];

        $sqlSelect = "SELECT * FROM cliente WHERE idCliente=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente WHERE idCliente=$id";
            $resultDelete = $conexao->query($sqlDelete);
            header('Location: fidelidade.php');
        }
        
    }else{
        echo "ERROR";
    }
    
?>