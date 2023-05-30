<h1>Novo Usuário</h1>

<!-- Iniciando o formulário. utilizando classes do bootstrap -->

<!-- Aqui estamos utilizando o método POST, pois não irá exibir a senha que o usuário digitou, na url -->
<form action="?page=salvar" method="POST">

    <!-- Estamos mandado uma ação com todo formulário, oculta, instruindo a ação de salvar -->
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">


        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label>Data de nascimento:</label>
        <input type="date" name="data_nasci" class="form-control">
    </div>

    <!-- Desenvolvendo o botão, para realizar o envio ao banco de dados -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>