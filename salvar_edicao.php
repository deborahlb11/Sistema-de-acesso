<?php

include_once('conexao.php');


if(isset($_POST['Salvar']))
{
	 $codigo= $_POST['codigo'];
     $nome=$_POST['nome']; 
     $email=$_POST['email']; 
     $senha=$_POST['senha'];
     
                       

     $sql= "UPDATE lce SET nome='$nome',email='$email',senha ='$senha' WHERE codigo='$codigo'";

	 $res = mysqli_query($con, $sql);

    header('Location:inicial.php');    

}

?>