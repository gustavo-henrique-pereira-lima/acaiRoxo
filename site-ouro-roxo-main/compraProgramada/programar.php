<?php
include_once('config.php');
$sql = "SELECT * FROM pedido ORDER BY idPedido DESC";
$result = $conexao->query($sql);
#print_r($result);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açai ouro roxo</title>
    <link rel="shortcut icon" href="img/icone-açaiouroroxo1.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/acaiRoxo/assets/delivery.css">
    
</head>
<body>
<!---------------------------------------------------Geral------------------------------------------------------->
    <div class="cantainer">
        <h2>Pedidos</h2>

        <nav>
            <ul>
                <li><a href="http://localhost/acaiRoxo/index.html">Voltar</a></li>
                <li><a href="adicionarPedido.php">Adicionar pedido</a></li>
            </ul>
        </nav> 
        <div>
            <table>
                <thead>
                    <tr>
                        <td scope="col"><strong>ID</strong></td>
                        <td scope="col"><strong>Cliente</strong></td>
                        <td scope="col"><strong>Entregador</strong></td>
                        <td scope="col"><strong>Produto</strong></td>
                        <td scope="col"><strong>Excluir</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['idPedido']."</td>";
                            echo "<td>".$user_data['Cliente']."</td>";
                            echo "<td>".$user_data['Entregador']."</td>";
                            echo "<td>".$user_data['Produto']."</td>";
                            echo "<td>
                                    <a href='delete.php?idPedido=$user_data[idPedido]'>
                                        <img src='icon/delete.png'>
                                    </a></td>";     
                            echo"<td>";  
                        }
                    ?>
                </tbody>
            </table> 
        </div>  
    </div>
    
</body>
</html>
