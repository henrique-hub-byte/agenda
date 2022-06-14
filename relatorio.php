<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatorio</title>
</head>
<body>
    <form action="index.php?link=relatorio.php" method="POST">
        <label for="">Nome:</label>

        <input type="text" name="nome"><br>
        <input type="submit" value="busca">
    </form><hr>

    <?php
        $nome = @$_REQUEST["nome"];
        $sql = "SELECT * FROM agendas WHERE nome like '%{$nome}'";
        $result = mysqli_query($conexao,$sql);

        if(mysqli_affected_rows($conexao)==0){
            echo "Agenda Vazia!!";
        }else{
            echo "<table border=1>
            <tr>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Obs</th>
            </tr>";

            while($registro = mysqli_fetch_assoc($result)){
                $cod = $registro["codigo"];
	            $nome = $registro["nome"];
	            $sexo = $registro["sexo"];
	            $email = $registro["email"];
	            $telefone = $registro["telefone"];
	            $obs = $registro["obs"];

            echo " <tr> 
            <td><a href='index.php?link=pesquisa.php&email=$email'>$nome</a></td>
            <td>$sexo</td>
            <td>$email</td>
            <td>$telefone</td>
            <td>$obs</td>
            </tr>";
            }
            echo "</table>";
            echo "<hr><input type='button' value='imprimir' onclick='window.print()>'>";
        }
    ?>
</body>
</html>