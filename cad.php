<?php
include ("conexao.php");
$nome= $_POST["nome"];
$email= $_POST["email"];
$senha= password_hash($_POST["senha"], PASSWORD_DEFAULT);

$consulta="INSERT INTO garoto (nome,emaIL,senha)
values('$nome', '$email', '$senha')";
if($conexao=mysqli_query($conexao,$consulta)){
    echo "sucesso";
}else{
    echo"erro";
}

?>