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
    $sql = "SELECT nome, email,senha,idade,rua,cidade,estado,biog,img FROM lce WHERE codigo = '$codigo'";
    $res = mysqli_query($con, $sql);

    if(mysqli_num_rows($res)>0)
                {
                    while($aux = mysqli_fetch_assoc($res)) 
                    { 
                        
                       
                        $nome=$aux["nome"]; 
                        $email=$aux["email"]; 
                        $senha=$aux["senha"];   
                        $idade = $aux["idade"];
                        $rua = $aux["rua"];
                        $cidade = $aux["cidade"];
                        $estado = $aux["estado"];
                        $biog = $aux["biog"];
                        $img= $aux["img"];     
                       
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

    <label>Idade:</label>
    <input type="number" name="idade" class="form-control" value="<?php echo $idade; ?>">

    <label>Rua:</label>
    <input type="text" name="rua" class="form-control" value="<?php echo $rua; ?>">

    <label>Cidade:</label>
    <input type="text" name="cidade" class="form-control" value="<?php echo $cidade; ?>">

    <label>Estado:</label>
    <input type="text" name="estado" class="form-control" value="<?php echo $estado; ?>">

    <label>Biografia:</label>
    <textarea name="biog" class="form-control"><?php echo $biog; ?></textarea>         

     <input type="hidden" name="codigo" value="<?php echo $codigo?>">


    <div class="form-group">
                <label>Foto Atual:</label><br>
                <?php if ($img): ?>
                    <img src="img/<?php echo $img; ?>" alt="Foto do usuário" width="150" class="img-thumbnail mb-2"><br>
                <?php else: ?>
                    <span>Sem foto enviada</span><br>
                <?php endif; ?>
                <label>Trocar Foto:</label>
                <input type="file" name="foto" accept="image/*" class="form-control-file">
            </div>


    <input type="submit" class ="btn btn-success" value="Salvar" name = "Salvar">
</form>

</div>

    </body>
</html>






