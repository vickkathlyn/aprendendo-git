<?php
include("conexao.php");

$nome=$_POST['nome'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

$sql="INSERT INTO feedback (nome, email, feedback) 
VALUES ('$nome', '$email', '$feedback')";

if(mysqli_query($conexao, $sql)){
    echo " Feedback enviado com sucesso";
}
else
{
echo "Erro" . mysqli_connect_error($conexao, $sql); 
}
mysqli_close($conexao);
?>