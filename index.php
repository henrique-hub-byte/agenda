<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Agenda</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <?php
    $link = @$_GET["link"];
    ?>
    <div id="topo">
    <h1>AGENDA</h1>
    </div>
    <div id="menu">
        <ul>
            <li> <a href="index.php?link=">Home</a> </li>
            <li> <a href="index.php?link=cadastro.html">Cadastrar</a> </li>
            <li> <a href="index.php?link=pesquisa.php">Pesquisar</a> </li>
            <li> <a href="index.php?link=relatorio.php">Relatório</a> </li>
        </ul>
    </div>

    <div id="conteudo">
        <?php
            if(!empty($link)) include($link);
            else echo "seja bem vindo!!!"
        ?>
    </div>
    <div id="rodape">
        <h3><address>&copy;ALL rights copyright</address></h3>
    </div>
</body>
</html>