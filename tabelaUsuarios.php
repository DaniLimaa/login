<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';

$user = 'root';

$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_usuario';

$resultado = $banco->query($select)->fetchAll();

?>
<main class="container my-5">
    <table class="table table-striped">
        <div class="my-3 d-flex justify-content-end">
            <a href="index.php" class="btn btn-secondary">Sair</a>
        </div>
        <tr>
            <td>Id</td>
            <td>Usuario</td>
            <td class="text-center">Ações</td>
        </tr>

        <?php foreach ($resultado as $lista) { ?>
            <tr>
                <td> <?= $lista['id'] ?> </td>
                <td> <?php echo $lista['usuario'] ?> </td>
                <td class="text-center">
                    <a class="btn btn-primary" href="./exibirUsuario.php?id_pessoa=<?= $lista['id'] ?>">Abrir</a>

                    <a class="btn btn-warning" href="./formularioEditar.php?id_pessoa=<?= $lista['id'] ?>">Editar</a>

                    <a class="btn btn-danger" href="./usuarioApagar.php?id=<?= $lista['id'] ?>">Excluir</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</main>