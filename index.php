<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" 1content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <!-- Veja que nesse caso, estamos usando os cases, do switch que foi feito -->
                        <a class="nav-link active" aria-current="page" href="?page=listar">Listar Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <!-- Declarando o espaço para usar o PHP -->
                <?php



                //Estamos fazendo uma ponte de ligação, entre os arquivos index e config (nele há a conexão com o banco de dados)
                include('config.php');



                //Através do REQUEST estamos fazendo uma declaração, para buscar as páginas na hora de chama-las
                //O '@' inibe o erro...
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("novoUsuario.php");
                        break;
                    case "listar":
                        include("listarUsuario.php");
                        break;

                    case "salvar":
                        include("salvarUsuario.php");
                        break;

                    case "editar":
                        include("editarUsuario.php");
                        break;

                    //Nesse request, é que caso não vá esse dois acima, colocar a mansagem abaixo
                    default:
                        print "<h1>Bem Vindos</h1>";
                }

                ?>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>