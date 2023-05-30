<h1>Listar Usuários</h1>

<?php


//Comando sql para trazer todos os dados
$sql = "SELECT * FROM usuarios";



//Realizando a conexão...
$res = $conn->query($sql);


//Desenvolvendo uma variável, para descobrir o numero de linhas capaturadas
$qtd = $res->num_rows;

if ($qtd > 0) {

    print "<table class='table table-hover table-striped table-bordered'>";

    //Esse "fetch_object" irá trazer todos os objetos (dados) da variável res e transformar em dados para a variável $row
    //É importante frizar que a variável $row é um ARRAY
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->data_nasci . "</td>";

        // Aqui estamos usando o href para direcionar, juntamente indiciando o ID que será editado;
        print "<td>  
        <button onclick=\"location.href='?page=editar&id=".$row->id."'\"  class='btn btn-success'> Editar </button>

        <button onclick=\"if(confirm('Tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'> Excluir </button>
        </td>";

        print "</tr>";

    }

    print "</table>";

} else {
    print "<p class='alert alert-danger'>Não foi encontrado resultados!</p>";
}


?>