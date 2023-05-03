<?php
    if(!empty($_GET['idEntregador']))
    {
        include_once('config.php');

        $id = $_GET['idEntregador'];

        $sqlSelect = "SELECT * FROM entregador WHERE idEntregador=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM entregador WHERE idEntregador=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }else{
        echo "ERROR";
    }
    header('Location: delivery.php')
?>