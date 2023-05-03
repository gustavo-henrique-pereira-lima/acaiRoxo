<?php
    if(!empty($_GET['idPedido']))
    {
        include_once('config.php');

        $id = $_GET['idPedido'];

        $sqlSelect = "SELECT * FROM pedido WHERE idPedido=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM pedido WHERE idPedido=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }else{
        echo "ERROR";
    }
    header('Location: programar.php')
?>