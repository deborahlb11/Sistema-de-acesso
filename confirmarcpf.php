<?php
include_once('conexao.php');

$cpf = filter_var($_REQUEST['cpf'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM lce WHERE cpf = '$cpf'";
$res = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validar CPF</title>
    <link rel="stylesheet" href="esquecesenha.css"/>
</head>
<body>
    <?php 
    if (mysqli_num_rows($res) == 1)
        { 
    ?>
    <div class="form-container">
        <form action="alterar_senha.php" method="post">
            <input type="hidden" name="email" value="<?php echo $cpf; ?>">
            <label for="novaSenha">Digite sua nova senha:</label>
            <input type="password" name="novasenha" id="novaSenha" required>
            <input type="submit" value="Atualizar" name="p">
        </form>
    </div>
    <?php 
    }

    else
    {

    ?>
    <div id="usuarioModal" class="modal">
        <div class="modal-content">
            <p>O CPF informado não está cadastrado.</p>
            <button onclick="voltar()">Tentar novamente</button>
        </div>
    </div>

    <script>
        window.onload = function() {
            document.getElementById("usuarioModal").style.display = "block";
        };

        function voltar() {
            history.back(); // Volta para a tela anterior
        }
    </script>

    <?php 
    }
    ?>

</body>
</html>