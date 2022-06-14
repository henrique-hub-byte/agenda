<?php
    require "conectar.php";

    $codigo = $_GET["codigo"];

    $sql="DELETE FROM agendas WHERE codigo=$codigo";

    if(mysqli_query($conexao, $sql)){
        echo "Exclusão realizada com sucesso...";
    }else {
        echo "erro ao excluir o registro:" . mysqli_connect_error($conexao);
    }
    echo "<hr><a href='index.php?link=pesquisa.php'>Voltar</a>";
    mysqli_close($conexao);