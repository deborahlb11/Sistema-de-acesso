<?php
$userc = filter_var($_REQUEST['userc'], FILTER_SANITIZE_STRING);
$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
$senhac = filter_var($_REQUEST['senhac'], FILTER_SANITIZE_STRING);
$cpf = filter_var($_REQUEST['cpf'], FILTER_SANITIZE_STRING);

$con= mysqli_connect('localhost','root','','dlb'); // mudar as informações quando  for hospedar

$sql = "INSERT INTO lce (nome,email,senha,cpf) VALUES ('$userc','$email','$senhac','$cpf')";
$res = mysqli_query($con, $sql);

  header('Location:Login.html');  
?>