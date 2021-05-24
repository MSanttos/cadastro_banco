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
        <script src="js/login.js"></script>
        <script src="js/main.js"></script>
        <title>Sistema de Cadastro</title>
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

        hr {
            margin: 2rem 0;
            color: inherit;
            background-color: white;
            border: 0;
            opacity: 0.25;
            height: 4px !important;
        }

        label {
            color: #FFFFFF;
        }

        textarea {
            resize: vertical;
            width: 100%;
            height: 35px;
            background: white;
            color: #1c2e42;
            font-weight: bold;
        }

        .table {
            --bs-table-bg: white;
            --bs-table-striped-color: #212529;
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: #212529;
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: #212529;
            --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #F27620;
            /* cor do background que vai ocupar o body */
            z-index: 999;
            /* z-index para jogar para frente e sobrepor tudo */
        }

        #preloader .inner {
            position: absolute;
            top: 50%;
            /* centralizar a parte interna do preload (onde fica a animação)*/
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .bolas>div {
            display: inline-block;
            background-color: #fff;
            width: 25px;
            height: 25px;
            border-radius: 100%;
            margin: 3px;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: animarBola;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .bolas>div:nth-child(1) {
            animation-duration: 0.75s;
            animation-delay: 0;
        }

        .bolas>div:nth-child(2) {
            animation-duration: 0.75s;
            animation-delay: 0.12s;
        }

        .bolas>div:nth-child(3) {
            animation-duration: 0.75s;
            animation-delay: 0.24s;
        }

        @keyframes animarBola {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }

            16% {
                -webkit-transform: scale(0.1);
                transform: scale(0.1);
                opacity: 0.7;
            }

            33% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        /* end: Preloader */

        </style>
    </head>

    <?php
    $conexao = mysqli_connect("localhost", "root", "", "baseteste");
    ?>

    <body>
        <!-- início do preloader -->
        <div id="preloader">
            <div class="inner">
                <!-- HTML DA ANIMAÇÃO DO PRELOADER! -->
                <div class="bolas">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- fim do preloader -->

        <!-- inico menu -->
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
                                <li><a class="dropdown-item" href="list_view.php">Lista cadastros</a></li>
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
                            <button type="submit" class="btn btn-primary" style="float: right;"><a href="login.html"
                                    style="color: white;">Sair</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- fim menu -->
        <!-- inicio container -->
        <div class="container">
            <form action="db_view.php" method="get">
                <!--db_view contem as variais recebidas dos names-->
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="color: white; margin: 50px;">Cadastro Cliente</h2>
                    </div>
                </div>
                <div class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome"
                            aria-label="First name" required>
                    </div>
                    <div class="col-md-4">
                        <label for="">Email:</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="exemplo@exemplo.com" aria-label="Last name" required>
                    </div>
                    <div class="col-md-4">
                        <label for="">Observação:</label>
                        <input type="text" id="msg" name="msg" class="form-control" placeholder="obs.:"
                            aria-label="First name" required>
                    </div>
                </div>
                <br>
                <center>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </center>
            </form>
        </div>
        <!-- fim container -->
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
    </body>

</html>
<!-- script preloader -->
<script>
$(window).on('load', function() {
    $('#preloader .inner').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });
})
</script>
<!-- script preloader -->
