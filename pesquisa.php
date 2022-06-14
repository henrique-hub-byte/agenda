<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
</head>

<body>
    <form action="pesquisa.php" method="POST">
        <label for="">Email:</label>
        <input type="text" name="email">
        <br>
        <input type="submit" value="busca">
        <hr>
    </form>
</body>
<?php
require "conectar.php";

$email = @$_REQUEST["email"];
if (!empty($email)) {
    $sql = "SELECT * FROM agendas WHERE email='$email'";

    $result = mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) == 0) {
        echo "registro não encontrado";
        
    } else {
        echo "estou aqui";
        $registro = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $codigo = $registro["codigo"];
        $nome = $registro["nome"];
        $sexo = $registro["sexo"];
        $email = $registro["email"];
        $telefone = $registro["telefone"];
        $obs = $registro["obs"];

        echo "<form action='alterar.php' method='POST'> 
                <label>Nome:</label>
                <input type='text' value='$nome' name='nome' required><br>";

        if ($sexo == 'M') {
            echo "<input type='radio' name='sexo' value='M' checked>Masculino
                         <input type='radio' name='sexo' value='F'>Feminino<br>";
        } else {
            echo "<input> type='radio' name='sexo' value='M' >Masculino
                         <input type='radio' name='sexo' value='F'checked>Feminino<br>";
        }
        echo "<label>Email:</label>
              <input type='text' name='email' maxlength'40' value='$email' readonly><br>
              <label>Telefone:</label>
              <input type='text' name='telefone' maxlength='15' value='$telefone'><br>
             <textarea name='obs' rows='5' cols='50'>
        $obs
        </textarea><br>
          <input type='submit' value='alterar'>
          <a href='index.php?link=excluir.php&cod=$codigo' style='text-decoration:none;'>
          <input type='button' value='Excluir'></a>
          <input type='button' value='Imprimir' onclick='window.print()'>
          </form>";
    }
}

?>

</html>