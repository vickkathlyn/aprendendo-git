<?php
$servidor="localhost:3308";
$usuario="root";
$senha="";
$dbname="feedback";
$conexao=mysqli_connect($servidor, $usuario, $Feedback, $dbname);
if(!$conexao){
    die("Houve um erro:".mysqli_connect_error());
}
?>