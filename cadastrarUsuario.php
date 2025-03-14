<?php

echo '<h1>Cadastro</h1>';

$usuarioUser = $_POST['usuario'];
$senhaUser = $_POST['senha'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$nomeUser = $_POST['nome'];
$anoNascimentoUser = $_POST['nascimento'];
$cpfUser = $_POST['cpf'];
$telefoneUser = $_POST['telefone'];
$telefone2User = $_POST['telefone2'];
$ruaUser = $_POST['logradouro'];
$numeroUser = $_POST['n_casa'];
$bairroUser = $_POST['bairro'];
$cidadeUser = $_POST['cidade'];

$insert = 'INSERT INTO tb_pessoa (nome, ano_nascimento, cpf, telefone_1, telefone_2, logradouro, n_casa, bairro, cidade) VALUE (:nome, :ano_nascimento, :cpf, :telefone_1, :telefone_2, :logradouro, :n_casa, :bairro, :cidade)';

$box = $banco->prepare($insert);

$box->execute([
    ':nome' => $nomeUser,
    ':ano_nascimento' => $anoNascimentoUser,
    ':cpf' => $cpfUser,
    ':telefone_1' => $telefoneUser,
    ':telefone_2' => $telefone2User,
    ':logradouro' => $ruaUser,
    ':n_casa' => $numeroUser,
    ':bairro' => $bairroUser,
    ':cidade' => $cidadeUser
]);

$id_pessoa = $banco->lastInsertId();

$insert = 'INSERT INTO tb_usuario (usuario, senha, id_pessoa) VALUE (:usuario, :senha, :id_pessoas)';

$box = $banco->prepare($insert);

$box->execute([
    ':usuario' => $usuarioUser,
    ':senha' => $senhaUser,
    ':id_pessoas' => $id_pessoa
]);

echo '<script>
    alert("Usuario cadastrado com sucesso")
    window.location.replace("index.php")
</script>';