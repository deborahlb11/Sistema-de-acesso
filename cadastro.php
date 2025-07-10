<?php
$userc = filter_var($_REQUEST['userc'], FILTER_SANITIZE_STRING);
$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
$senhac = filter_var($_REQUEST['senhac'], FILTER_SANITIZE_STRING);
$cpf = filter_var($_REQUEST['cpf'], FILTER_SANITIZE_STRING);
$idade= filter_var($_REQUEST['idade'], FILTER_SANITIZE_STRING);
$rua= filter_var($_REQUEST['rua'], FILTER_SANITIZE_STRING);
$cidade= filter_var($_REQUEST['cidade'], FILTER_SANITIZE_STRING);
$estado= filter_var($_REQUEST['estado'], FILTER_SANITIZE_STRING);
$biog= filter_var($_REQUEST['biog'], FILTER_SANITIZE_STRING);

$con= mysqli_connect('localhost','root','','dlb'); // mudar as informações quando  for hospedar


if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) 
{
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_nome = basename($_FILES['foto']['name']);
    
    // Cria um nome único para evitar conflitos
    $foto_novo_nome = uniqid() . "_" . $foto_nome;

    // Pasta onde a imagem será salva
    $caminho_destino = "img/" . $foto_novo_nome;

    // Move a imagem para a pasta
    if (move_uploaded_file($foto_tmp, $caminho_destino)) 
    {
        $sql = "INSERT INTO lce (nome, email, senha, cpf, idade, rua, cidade, estado, biog, img) VALUES ('$userc','$email','$senhac','$cpf','$idade','$rua','$cidade','$estado','$biog','$foto_novo_nome')";

        if (mysqli_query($con, $sql))
        {
             header('location:login.php');
        } 
        else 
        {
            echo "Erro ao cadastrar: " . mysqli_error($con);
        }
    } 
    else 
    {
        echo "Erro ao salvar a foto.";
    }
} 
else 
{
    echo "Nenhuma foto foi enviada.";
}
 
?>
