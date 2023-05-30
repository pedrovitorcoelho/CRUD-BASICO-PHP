<h1>Editar Usuário</h1>
<!-- O editar usuário é a mesma coisa que o novo usuário, porém estamos utilizando um select para prencher ele já com as informações cadastradas -->
<?php


$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);

//Criando outro array, para em vez de por um while, imprimir direto os resultados
$row = $res->fetch_object();


?>


<form action="?page=salvar" method="POST">

    <!-- Estamos mandado uma ação com todo formulário, oculta, instruindo a ação de EDITAR -->
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id" value="<?php print $row->id; ?>">


    <div class="mb-3">

    <!-- Adicionando os VALUES ao campo, para vir com as informações -->

        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Data de nascimento:</label>
        <input type="date" name="data_nasci" value="<?php print $row->data_nasci; ?>" class="form-control">
    </div>

    <!-- Desenvolvendo o botão, para realizar o envio ao banco de dados -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>