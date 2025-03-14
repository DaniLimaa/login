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

<body>
    <form action="./cadastrarUsuario.php" method="POST">
        <div class="mt-5 d-flex align-itens-center flex-column gap-2">
        <h2>Cadastrar Usuario</h2>

        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="nome" name="nome">

        <label class="form-label"></label>
        <input type="number" class="form-control" placeholder="ano de nascimento" name="nascimento">

        <label class="form-label"></label>
        <input type="number" class="form-control" placeholder="cpf" name="cpf">

        <label class="form-label"></label>
        <input type="number" class="form-control" placeholder="telefone" name="telefone">

        <label class="form-label"></label>
        <input type="number" class="form-control" placeholder="telefone2" name="telefone2">

        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="rua" name="logradouro">

        <label class="form-label"></label>
        <input type="number" class="form-control" placeholder="numero" name="n_casa">

        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="bairro" name="bairro">

        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="cidade" name="cidade">

        <label class="form-label"></label>
        <input type="text" class="form-control" placeholder="usuario" name="usuario">
        
        <label class="form-label"></label>
        <input type="password" class="form-control" placeholder="senha" name="senha">

        <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </form>
</body>