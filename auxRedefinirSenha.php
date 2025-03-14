<?php

$userForm = $_POST['user'];
$cpfForm = $_POST['cpf'];
$novaSenha = $_POST['novaSenha'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$consultaUsuarioCpf = 'SELECT * FROM tb_usuario INNER JOIN tb_pessoa ON tb_usuario.id_pessoa = tb_pessoa.id WHERE usuario = "'.$userForm .'" AND cpf = "' . $cpfForm . '"';

$resultado = $banco->query($consultaUsuarioCpf)->fetch();

if ($resultado) {
    $redefinir = $banco->prepare('UPDATE tb_usuario SET senha = :novaSenha WHERE usuario = :user');
    $redefinir->execute(['novaSenha' => $novaSenha, 'user' => $userForm]);

    echo '<script>
    alert("Usuario cadastrado com sucesso")
    window.location.replace("index.php")
</script>';
} else {
    echo '<script>
    alert("Usuario ou senha incorretos")
    window.location.replace("formRedefinirSenha.php")
</script>';
}

var_dump($resultado);