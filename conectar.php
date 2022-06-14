<?php
//nesse caso o banco esta no meu pc
$servidor = "localhost";
$usuario = "root";
$senha = "Anfield_893";
$dbname = "agenda";


/*um objeto*/
/** varivael conexao recebe a função  */
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao) {
  echo "minha mensagem de erro" . mysqli_connect_errno();
}else {

  echo "conectou!";
}
