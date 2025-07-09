<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="editarcad.css">
    </head>

<?php
include_once('conexao.php');

$nome = '';
$email = '';
$senha = '';

$codigo = $_SESSION['codigo'] ?? null;

if ($codigo) 
{
    $sql = "SELECT nome, email,senha FROM lce WHERE codigo = '$codigo'";
    $res = mysqli_query($con, $sql);

    if(mysqli_num_rows($res)>0)
                {
                    while($aux = mysqli_fetch_assoc($res)) 
                    { 
                        
                       
                        $nome=$aux["nome"]; 
                        $email=$aux["email"]; 
                        $senha=$aux["senha"];         
                       
                    } 
                }

               else 
                {
   
                    header('location:inicial.php');
                }
}

?>

<h2>Edite Seus Dados</h2>

<div class="form-container">
<form action="salvar_edicao.php" method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?php echo $nome; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $email; ?>"required><br><br>

     <label>Senha:</label><br>
    <input type="password" name="senha" value="<?php echo $senha; ?>" required><br><br>

     <input type="hidden" name="codigo" value="<?php echo $codigo?>">

    <input type="submit" class ="btn btn-success" value="Salvar" name = "Salvar">
</form>

</div>

    </body>
</html>



