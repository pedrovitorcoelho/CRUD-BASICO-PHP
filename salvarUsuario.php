<?php



//Desenvolvendo um switch, com base na ação do usuário. É necessário fazer com o $_REQUEST

switch ($_REQUEST["acao"]) {
    case "cadastrar":
        //Colocando as variáveis e os respectivos nomes, de acordo com o forms
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasci = $_POST["data_nasci"];


        //Inserindo o comando SQL
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasci) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasci}')";

        //Mandando o comando sql para o banco
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuario cadastrado com sucesso')</script>";

            //Redirecionando para outra página
            print "<script>location.href='?page=listar';</script>";

        } else {
            print "<script>alert('Erro ao cadastrar usuario')</script>";

            //Redirecionando para outra página
            print "<script>location.href='?page=listar';</script>";
        }
        break;


    //O que vamos apenas mudar no EDITAR será a query, ou seja, o comando SQL
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasci = $_POST["data_nasci"];

        $sql = "UPDATE usuarios SET 
                                nome='{$nome}',
                                email='{$email}',
                                senha='{$senha}',
                                data_nasci='{$data_nasci}'
                                WHERE
                                    id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuario editado com sucesso')</script>";

            //Redirecionando para outra página
            print "<script>location.href='?page=listar';</script>";

        } else {
            print "<script>alert('Erro ao editar usuario')</script>";

            //Redirecionando para outra página
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case "excluir":

        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuario excluido com sucesso')</script>";

            //Redirecionando para outra página
            print "<script>location.href='?page=listar';</script>";

        } else {
            print "<script>alert('Erro ao excluir usuario')</script>";

            //Redirecionando para outra página
            print "<script>location.href='?page=listar';</script>";
        }
        break;

}

?>