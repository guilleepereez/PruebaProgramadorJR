<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 - CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

    <!-- Mi CSS = estilo.css -->
    <link rel="stylesheet" href="public/css/estilo.css">
    <!-- Mi JS = myJS.js-->
    <script src="public/js/myJS.js"></script>

    <title>Test prueba Programador JR</title>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>
    <!-- HEADER -> Navbar -->
    <header class="mx-auto">
        <nav class="navbar navbar-expand-lg navbar-light mx-auto">
            <a class="navbar-brand" href="#">
                <img src="public/images/emkt.png" width="90" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse form-inline" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <span class="d-inline-block" data-mdb-toggle="popover" data-mdb-content="Navbar y Footer estan el index.php - Todo lo demas se llama desde el controlador">
                            <button class="btn btn-light btn-rounded" style="pointer-events: none;" type="button" disabled>
                                INFO
                            </button>
                        </span>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <!-- SECTION -> Views -->
    <section class="center MT">
        <?php
        require './controllers/vistaController.php';
        ?>  
    </section>


    <!-- FOOTER  -->
    <hr class="MT">
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <p style="color: black;">Nuestras redes sociales</p>
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/EMKTCompany" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="https://www.instagram.com/emkt_company/" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="https://www.linkedin.com/company/emkt-company/?originalSubdomain=sv" role="button"><i class="fab fa-linkedin-in"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white">Guillermo Antonio Pérez Fuentes</a>
        </div>
        <!-- Copyright -->
    </footer>


    <!-- Bootstrap 4 - JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>