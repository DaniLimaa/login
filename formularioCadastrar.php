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
        width: 300px;
        height: 50px;
        border-radius: 10px;
    }
</style>

<body>
    <form action="./cadastrarUsuario.php" method="POST">
        <div class="mt-5 d-flex align-itens-center flex-column gap-2">
        <h2>Cadastrar Usuario</h2>
        <input type="text"   placeholder="nome"       name="nome">
        <input type="number" placeholder="nascimento" name="nascimento">
        <input type="number" placeholder="cpf"        name="cpf">
        <input type="number" placeholder="telefone"   name="telefone">
        <input type="number" placeholder="telefone2"  name="telefone2">
        <input type="text"   placeholder="rua"        name="logradouro">
        <input type="number" placeholder="numero"     name="n_casa">
        <input type="text"   placeholder="bairro"     name="bairro">
        <input type="text"   placeholder="cidade"     name="cidade">

        <input type="usuario"  placeholder="usuario" name="usuario">
        <input type="password" placeholder="senha"   name="senha">
        </div>
    </form>
</body>