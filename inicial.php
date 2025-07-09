<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Essa sua Página Inicial</title>
        <link rel="stylesheet" type="text/css" href="pginicial.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

<body>
    <?php
           session_start();    
    ?>
    <nav class="topo">
                <div class="menu"> 
                    <?php $_SESSION['codigo'];?>      
                    <span class="bemvindo"> Olá, <?php echo $_SESSION['nome'];?> </span>
                    <form method="get" style="display:inline;">
                    <input type="hidden" name="pagina" value="editar">
                    <button type="submit" class="btn btn-primary">Editar cadastro</button>
                    </form>
                    <div class="links">
                    <form action="sair.php">
                        <input type="submit"class= "btn btn-info" value="Sair" />
                    </form>                       
                    </div>                       
                </div>
                                    
    </nav>

    

    <div id="conteudo">
        <?php
            if (isset($_GET['pagina']) && $_GET['pagina'] == 'editar') 
            {
                include 'editarcad.php';
            } 

        ?>
    </div>
</body>

</html>
