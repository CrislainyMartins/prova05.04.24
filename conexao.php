<?php
$host="localhost";
$user="root";
$senha="";
$banco="c1";

if($conexao = mysqli_connect($host,$user,$senha,$banco)){
    echo "sucesso";
} else{
    echo"erro";
}
?>

