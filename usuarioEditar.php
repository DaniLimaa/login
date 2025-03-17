<?php

echo '<h1>Aluno Editar</h1>';

var_dump($_POST);

$editarId          =   $_POST['id_pessoa'];
$editarSenha       =   $_POST['senha'];

$editarTelefone1   =   $_POST['telefone1'];
$editarTelefone2   =   $_POST['telefone2'];
$editarRua         =   $_POST['logradouro'];
$editarNumero      =   $_POST['n_casa'];
$editarBairro      =   $_POST['bairro'];
$editarCidade      =   $_POST['cidade'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_usuario SET senha = :senha WHERE id = :id';

$box = $banco->prepare($update)->execute([
    ':id' => $editarId,
    ':senha' => $editarSenha
]);

$update = 'UPDATE tb_pessoa SET telefone_1 = :tel_1, telefone_2 = :tel_2, logradouro = :logradouro, n_casa = :numero_casa, bairro = :bairro_form, cidade = :cidade_form WHERE id = :id';

$banco->prepare($update)->execute([
    ':tel_1' => $editarTelefone1,
    ':tel_2' => $editarTelefone2,
    ':logradouro' => $editarRua,
    ':numero_casa' => $editarNumero,
    ':bairro_form' => $editarBairro,
    ':cidade_form' => $editarCidade,
    ':id' => $editarId
]);

echo "<script>
        alert('Dados Alterados com sucesso!');
        window.location.href='tabelaUsuarios.php';
</script>";