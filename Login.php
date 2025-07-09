<!DOCTYPE html>
<html lang="en-IN">
<head>
<meta charset="utf-8">
<title></title>
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel='stylesheet'>
<link rel="stylesheet" href="login.css"/>
</head>
<body>
<div id="login-form">
<input type="radio" checked id="login" name="switch" class="hide">
<input type="radio" id="signup" name="switch" class="hide">

<div>
<ul class="form-header">
<li><label for="login"> Entrar<label for="login"></li>
<li><label for="signup">Cadastra-se</label></li>
</ul>
</div>

<div class="section-out">
<section class="login-section">
<div class="login">
<form action="logar.php" method ="POST">
<ul class="ul-list">
<li><input type="text" name="user" required class="input" placeholder="Usuário"/><span class="icon"><i class="fa fa-user"></i></span></li>
<li><input type="password" name ="senha" required class="input" placeholder="Senha"/><span class="icon"><i class="fa fa-lock"></i></span></li>
<li><a href="esquecesenha.php">Esqueceu a senha?</a></li>
<li><input type="submit" value="Entrar" class="btn"></li>
</ul>
</form>
</div>

</section>

<section class="signup-section">
<div class="login">
<form action="cadastro.php" method="POST">
<ul class="ul-list">
<li><input type="text"  name="userc" required class="input" placeholder="Nome/Usuário"/><span class="icon"><i class="fa fa-user"></i></span></li>
<li><input type="email"  name="email" required class="input" placeholder="E-mail"/><span class="icon"><i class="fa fa-at"></i></span></li>
<li><input type="password"  name="senhac" required class="input" placeholder="Senha"/><span class="icon"><i class="fa fa-lock"></i></span></li>
<li><input type="text"  name="cpf" required class="input" placeholder="CPF"/><span class="icon"><i class="fa fa-user"></i></span></li>
<li><input type="submit" value="Cadastrar" class="btn" name="cadastrar"></li>
</ul>
</form>
</div>
</section>
</div>

