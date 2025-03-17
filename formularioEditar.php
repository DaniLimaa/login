<?php

$id_usuario = $_GET['id_pessoa'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT tb_pessoa.*, tb_usuario.usuario, tb_usuario.senha FROM tb_usuario INNER JOIN tb_pessoa ON tb_usuario.id_pessoa = tb_pessoa.id WHERE tb_usuario.id_pessoa = $id_usuario";

$dados = $banco->query($select)->fetch();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body {
        display: flex;
        justify-content: center;
        background-color: #0e0e0e;
        color: #f2f2f2;
    }

    form {
        width: 500px;
    }
</style>

<body>
    <form action="usuarioEditar.php" method="POST">
        <div class="mt-5 d-flex align-itens-center flex-column gap-2">
            <h2>Exibir Informações</h2>

            <input type="hidden"    placeholder="id"         name="id_pessoa"         value="<?= $dados['id'] ?>">

            <label for="nome" class="form-label"></label>
            <input type="text" value="<?= $dados['nome'] ?>" class="form-control" disabled name="nome">

            <label for="telefone" class="form-label"></label>
            <input type="number" value="<?= $dados['ano_nascimento'] ?>" class="form-control" disabled name="nascimento">

            <label for="cpf" class="form-label"></label>
            <input type="number" value="<?= $dados['cpf'] ?>" class="form-control" name="cpf" disabled >

            <label for="telefone1" class="form-label"></label>
            <input type="number" value="<?= $dados['telefone_1'] ?>" class="form-control" name="telefone1">

            <label for="telefone2" class="form-label"></label>
            <input type="number" value="<?= $dados['telefone_2'] ?>" class="form-control" name="telefone2">

            <label for="rua" class="form-label"></label>
            <input type="text" value="<?= $dados['logradouro'] ?>" class="form-control" name="logradouro">

            <label for="numero casa" class="form-label"></label>
            <input type="number" value="<?= $dados['n_casa'] ?>" class="form-control" name="n_casa">

            <label for="bairro" class="form-label"></label>
            <input type="text" value="<?= $dados['bairro'] ?>" class="form-control" name="bairro">

            <label for="cidade" class="form-label"></label>
            <input type="text" value="<?= $dados['cidade'] ?>" class="form-control" name="cidade">

            <label for="usuario" class="form-label"></label>
            <input type="text" value="<?= $dados['usuario'] ?>" class="form-control" name="usuario" disabled >

            <label for="senha" class="form-label"></label>
            <input type="text" value="<?= $dados['senha'] ?>" class="form-control" name="senha">

            <input type="submit" value="Editar" class="btn btn-primary">

        </div>
    </form>
</body>