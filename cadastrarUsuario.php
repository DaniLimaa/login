<?php

echo '<h1>Cadastro</h1>';

$nomeUser = $_POST['nome'];
$nascimentoUser = $_POST['nascimento'];
$cpfUser = $_POST['cpf'];
$telefoneUser = $_POST['telefone'];
$telefone2User = $_POST['telefone2'];
$ruaUser = $_POST['logradouro'];
$numeroUser = $_POST['n_casa'];
$bairroUser = $_POST['bairro'];
$cidadeUser = $_POST['cidade'];
$usuarioUser = $_POST['usuario'];
$senhaUser = $_POST['senha'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, senha:)';

$box = $banco->prepare($insert);

$box->execute([
    ':usuario' => $usuarioUser,
    ':senha' => $senhaUser
]);

$id_pessoa = $banco->lastInsertId();