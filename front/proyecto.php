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

    <!--inicio de cuerpo de la pagina-->
    <!--carrusel -->
    <section class="home">
        <div class="container">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="carrusel.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="carrusel.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="carrusel.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- fin carrusel -->

    <!--tarjeta sobre beneficios -->
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center">Porque elegirnos</h1>
            <p class="light w-75 mx-auto text-center">lorem </p>
        </div>
        <div class="container" id="card">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="heart.svg" alt="heart" height="150px" width="100px" class="icon mx-auto d-block" />
                        <div class="card-img-overlay">
                            <h5 class="card-title">UN placeholder de un beneficio</h5>
                            <p class="card-text text-start p-0  ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Corporis, dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="heart.svg" alt="heart" height="150px" width="100px" class="icon mx-auto d-block" />
                        <div class="card-img-overlay">
                            <h5 class="card-title">UN placeholder de un producto</h5>
                            <p class="card-text text-start p-0">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Corporis, dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="heart.svg" alt="heart" height="150px" width="100px" class="icon mx-auto d-block" />
                        <div class="card-img-overlay">
                            <h5 class="card-title">UN placeholder de un producto</h5>
                            <p class="card-text text-start p-0">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Corporis, dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--fin de tarjetas de beneficios -->

    <!--slider de productos -->
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center">Featured Products</h1>
            <p class="light w-75 mx-auto text-center">lorem </p>
        </div>
        <div class="col-md-12">
            <div id="carouselProductos" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="row g-3 ">

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top"><!-- IMPORTANTE CAMBIAR TAMAÑO  style="height: 18rem;-->
                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.png" alt="">comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">
                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.png" alt="">comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">

                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">

                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.png" alt="">comprar</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                         <div class="row g-3 ">

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">
                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.png" alt="">comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">
                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.png" alt="">comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">

                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">

                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.svg" alt="shopping_cart" height="30px"
                                                    width="30px" />comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3 ">

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">
                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.png" alt="">comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">
                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.png" alt="">comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">

                                    <img src="tarjeta.png" alt="un placeholder de un prodtuco" class="card-img-top">

                                    <div class="card-body">
                                        <span class="product-type"> Electronics Y accesproes</span>
                                        <a href="#" class="d-block 
                                        text-decoration-none py-2 product-name">Apple algo que suene caro</a>
                                        <span class="product-price"> $10.000</span>
                                        <div class="btn-wrapper text-center d-flex justify-content-between">
                                            <a class="btn btn-warning"> <img src="heart.png" alt=""></a>
                                            <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">
                                                <img src="shopping_cart.svg" alt="shopping_cart" height="30px"
                                                    width="30px" />comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductos"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselProductos"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>



    <!--fin de slider  de productos -->

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

    <!-- inicio foote  ->
   
    <!- final footer-->




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>

</html>