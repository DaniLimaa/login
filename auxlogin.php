<?php

echo '<h1>auxlogin.php</h1>';

$userForm = $_POST['user'];
$passwordForm = $_POST['password'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$consultaUsuarioSenha = 'SELECT * FROM tb_usuario WHERE usuario = "' . $userForm . '" AND senha = "' . $passwordForm . '"';

$resultado = $banco->query($consultaUsuarioSenha)->fetch();

$status = $resultado['status'];
?>


<?php if ($status == 'admin') { ?>

<h1>Bem vindo USUARIO ADMIN</h1>

<?php } ?>

<h1>Bem vindo USUARIO COMUM</h1>

<a href="#" class="btn btn-success">Cadastrar -comum</a>

<a href="#" class="btn btn-primary">Abrir -comum</a>

<a href="#" class="btn btn-warning <?= $status != 'admin' ? 'disable' : ''  ?>" >Editar -admin</a>

<a href="#" class="btn btn-danger">Excluir -admin</a>


<?php
die;
if (!empty($resultado) && $resultado != false){
    header('location:index.php');
} else {
    header('location:tabelaUsuarios.php');
}