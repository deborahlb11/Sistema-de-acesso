<?php

include_once('conexao.php');

    $senha=$_POST['novasenha']; 
                       
     $sql= "UPDATE lce SET senha='$senha' WHERE email='$email';";

	 $res = mysqli_query($con, $sql);

    header('Location:login.html');    

