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

var_dump($resultado);

if (!empty($resultado) && $resultado != false){
    header('location:index.php');
} else {
    header('location:tabelaUsuarios.php');
}