<?php

    include ("conectar.php");
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $obs = $_POST["obs"];

    $sql = "INSERT INTO agendas(nome, sexo, email, telefone, obs) VALUES ('$nome', '$sexo', '$email', '$telefone', '$obs')";
    var_dump($sql);
    /* var_dump($nome); */
    if(mysqli_query($conexao, $sql)){
        echo "cadastro realizado com sucesso!!  ";
    }else{
        echo "erro não deu boaaaaaaa" . mysqli_connect_error($conexao);
    }
    
    

    mysqli_close($conexao); //encerrar conexao
?>