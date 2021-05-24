<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="js/scriptDelete.js"></script>
        <title>Views</title>
        <style>
        body {
            background-image: url(img/star-sky.jpg);
        }

        .container-table {
            margin-left: auto;
            width: 75%;
            color: white;
            margin-top: 10%;
            margin-right: auto;
        }

        td {
            color: white;
        }

        tr {
            color: white;
        }

        .table>:not(:last-child)>:last-child>* {
            text-align: center;
        }

        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                        <div class="container">
                            <button class="btn btn-success" type="submit">
                                <a href="index.php" style="color: #FFFFFF;">Voltar</a>
                            </button>
                            <button type="submit" class="btn btn-primary" style="float: right;">
                                <a href="login.html" style="color: white;">Sair</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <!-- inicio table -->
        <section>
            <div class="container">
                <table class="table table-bordered" style="margin-top: 50px;">
                    <tr>
                        <th scope="col text-center">ID</th>
                        <th scope="col text-center">Nome</th>
                        <th scope="col text-center">Email</th>
                        <th scope="col text-center">Mensagem</th>
                        <th scope="col text-center">ALTERAR</th>
                        <th scope="col text-center">EXCLUIR</th>
                    </tr>

                    <?php
                        include("conexao.php"); //conexao com banco de dados
                        $seleciona=mysqli_query($conexao, "SELECT * FROM dados order by id desc");
                        //a variavel seleciona recebe o seguinte comando: atraves da conexao recebe tudo da tabela dados em ordem decrescente
                        while($campo=mysqli_fetch_array($seleciona)){?>
                    <tr>
                        <th scope="row"><?=$campo["id"]?></th>
                        <td><?=$campo["nome"]?></td>
                        <td><?=$campo["email"]?></td>
                        <td><?=$campo["msg"]?></td>
                        <!-- icones -->
                        <td align="center">
                            <a href="editar.php?editaid=<?=$campo["id"]?>">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td align="center">
                            <a href="#" onclick="verifica(<?=$campo["id"]?>)">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                        <!-- icones -->
                    </tr>
                    <?php }?>
                </table>
            </div>
        </section>
        <!-- fim table -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
    </body>

</html>
