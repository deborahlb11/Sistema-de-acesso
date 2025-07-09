<?php

include_once('conexao.php');

$user = filter_var($_REQUEST['user'], FILTER_SANITIZE_STRING);
$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);

$sql="SELECT * FROM lce WHERE  nome = '$user' and  senha = '$senha'";
$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res)==1)
{
    session_start();
    $dados = mysqli_fetch_assoc($res);
    $_SESSION['codigo'] = $dados['codigo'];
    $_SESSION['nome'] = $dados['nome'];
    header('location: inicial.php');
    exit();
    
}
else 
{
    header('location:Login.html');
}






