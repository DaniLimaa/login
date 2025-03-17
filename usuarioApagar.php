<?php

echo 'Usuario-deletar.php';

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$idFormulario = $_GET['id'];

$delete = 'DELETE FROM tb_usuario WHERE id = :id';
$box = $banco->prepare($delete);
$box->execute([
    ':id' => $idFormulario
]);

$delete = 'DELETE FROM tb_pessoa WHERE id = :id';
$box = $banco->prepare($delete);
$box->execute([
    ':id' => $idFormulario
]);

    echo '<script>
        alert("Usuario apagado com sucesso")
        window.location.replace("tabelaUsuarios.php")
    </script>';