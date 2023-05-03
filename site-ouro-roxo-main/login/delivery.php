<?php
include_once('config.php');
$sql = "SELECT * FROM entregador ORDER BY idEntregador DESC";
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
        <h2>Delivery</h2>

        <nav>
            <ul>
                <li><a href="adicionarEntregador.php">Adicionar entregador</a></li>
            </ul>
        </nav> 
        <div>
            <table>
                <thead>
                    <tr>
                        <td scope="col"><strong>ID</strong></td>
                        <td scope="col"><strong>Nome</strong></td>
                        <td scope="col"><strong>CNH</strong></td>
                        <td scope="col"><strong>Telefone</strong></td>
                        <td scope="col"><strong>Excluir</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['idEntregador']."</td>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['telefone']."</td>";
                            echo "<td>".$user_data['cnh']."</td>";
                            echo "<td>
                                    <a href='delete.php?idEntregador=$user_data[idEntregador]'>
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
