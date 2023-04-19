<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>NavBar</title>
</head>

<body>
    <!-- Inicio del top -->
    <div id="top">
        <div class="container-fluid">
            <div class="col-md-3 offer">
                <ul class="navbar me-auto mb-8 mb-lg-0">
                    <li class="nav-item">
                        <a class="text-reset text-decoration-none" href="#">registrarte</a>
                    </li>
                    <li class="nav-item">

                        <a class="text-reset text-decoration-none" data-bs-toggle="modal" href="#logindemo"
                            role="button">
                            inicio secion
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="text-reset text-decoration-none" href="#">carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-reset text-decoration-none" href="#">mi cuenta</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- fin  del top -->
    <!-- Inicio del menu -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- icono o nombre -->

            <a class="navbar-brand" >
                <i class="bi bi-flower1"></i>
                <span class="text-warning">Hobbymania</span>
            </a>

            <!-- boton del menu -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- elementos del menu colapsable -->

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Acerca de
                        </a>

                        <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url("terminos"); ?>">Terminos y usos</a></li>
                            <li><a class="dropdown-item" href="#">Nosotros</a>
                            <li>
                            <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
                        </ul>
                    </li>
                </ul>

                <hr class="d-md-none text-white-50">

                <!-- enlaces redes sociales -->

                <ul class="navbar-nav  flex-row flex-wrap text-light">

                    <li class="nav-item col-6 col-md-auto p-3">
                        <i class="bi bi-twitter"></i>
                        <small class="d-md-none ms-2">Twitter</small>
                    </li>

                    <li class="nav-item col-6 col-md-auto p-3">
                        <i class="bi bi-whatsapp"></i>
                        <small class="d-md-none ms-2">WhatsApp</small>
                    </li>

                    <li class="nav-item col-6 col-md-auto p-3">
                        <i class="bi bi-facebook"></i>
                        <small class="d-md-none ms-2">Facebook</small>
                    </li>

                </ul>

                <!--boton Informacion -->

            </div>
    </nav>




    <!-- inicio modal -->
    <div id="logindemo" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-bdoy">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                    </button>
                    <div class="myform bg-dark">
                        <h1 class="text-center">Login form</h1>
                        <form action="#">
                            <div class="mb-3 mt-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control " placeholder="....">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="password">password</label>
                                <input type="password" class="form-control" placeholder="....">
                            </div>
                            <button type="button" class="btn btn-light mt-3">Login</button>
                            <p>not a member <a href="signup.html">Signup</a> </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal-->

 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>

</html>