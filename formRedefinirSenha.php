<html lang="pt-br">

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

<form action="auxRedefinirSenha.php" method="POST" class="mt-5">
    <label>Usuario: </label>
    <input type="text" class="form-control" name="user">

    <label class="form-label">Cpf:</label>
    <input type="number" class="form-control" name="cpf">

    <label class="form-label">Nova senha:</label>
    <input type="password" class="form-control" name="novaSenha">

    <input class="btn btn-success mt-3" type="submit" value="Confirmar">
</form>