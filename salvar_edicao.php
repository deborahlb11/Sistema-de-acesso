<?php
include_once('conexao.php');

if (isset($_POST['Salvar'])) {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idade = $_POST["idade"];
    $rua = $_POST["rua"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $biog = $_POST["biog"];

    
    // Inicializa variável da imagem
    $foto_sql = "";

    // Verifica se uma nova imagem foi enviada
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $foto_tmp = $_FILES['img']['tmp_name'];
        $foto_nome = basename($_FILES['img']['name']);
        $foto_novo_nome = uniqid() . "_" . $foto_nome;
        $caminho_destino = "img/" . $foto_novo_nome;

        if (move_uploaded_file($foto_tmp, $caminho_destino)) {
            $foto_sql = ", img='$foto_novo_nome'"; // Só adiciona à query se a imagem foi salva com sucesso
        } else {
            echo "Erro ao salvar a nova imagem.";
            exit;
        }
    }

    // Query com atualização condicional da imagem
    $sql = "UPDATE lce SET nome='$nome', email='$email', senha='$senha', idade='$idade', rua='$rua', cidade='$cidade', estado='$estado', biog='$biog' img='$foto_sql'
            WHERE codigo='$codigo'";

    $res = mysqli_query($con, $sql);

    if ($res) {
        header('Location: inicial.php');
        exit;
    } else {
        echo "Erro ao atualizar: " . mysqli_error($con);
    }
}


?>
