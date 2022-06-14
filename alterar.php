<?php
    require "conectar.php";

    $nome = $_POST["nome"]; 
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $tel = $_POST["telefone"];
    $obs = $_POST["obs"];

    $campos = "nome='$nome', sexo='$sexo',telefone='$tel', obs='$obs'";

    $sql = "UPDATE agendas SET $campos WHERE email='$email'";

    if(mysqli_query($conexao, $sql)){
        echo "Registro atualizado com sucesso...";
    }else{
        echo "Erro ao atualizar o registro :" . mysqli_connect_error();
    }
    echo "<hr><a href='index.php?link=pesquisa.php'>Voltar</a>";
    mysqli_close($conexao);