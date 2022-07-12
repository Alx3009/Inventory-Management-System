<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Homepage</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg py-3  sticky-top navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="img/bctlogo1.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">About Us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!--hero-->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <!-- <img src="img/hero.jpg" class="img-fluid" alt="Responsive image" class="position-relative"> -->
        <!-- <img class="img" src="img/hero.jpg"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">All the stuff you are looking for!</h1>
                    <p class="text-white my-3">Inventory makes things easier, with easy, efficient and reliable record keeping</p>
                    <a href="login.php" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <section class="row w-100 py-0 bg-light" id="features">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h6 class="text-primary">WHY TO CHOOSE US</h6>
                        <h1>Service</h1>
                        <p>This web contains inventory services where a company can find out and manage goods</p>

                        <div class="feature d-flex mt-5">
                            <div class="iconbox me-3">
                                <i class='bx bxs-comment-edit'></i>
                            </div>
                            <div>
                                <h5>Display</h5>
                                <p>Be able to see the quantity, product name, picture, supplier, and price of the goods</p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-download'></i>
                            </div>
                            <div>
                                <h5>Adding</h5>
                                <p>Can add many products that are arranged into a table</p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-download'></i>
                            </div>
                            <div>
                                <h5>Updating and Removing</h5>
                                <p>Can edit existing data, and can delete it from the table</p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-user-circle'></i>
                            </div>
                            <div>
                                <h5>Manage Admin</h5>
                                <p>Can create a new admin by creating the username and password </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- FEATURES -->
    <!-- PROJECTS -->
    <section id="portfolio">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">Clients</h6>
                    <h1>Our Recent Clients</h1>
                    <p>Clients we work with</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/nissin.png" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">PT.Nissin</h4>
                                <h6 class="text-white"></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/wings.png" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">PT.Wings Food</h4>
                                <h6 class="text-white"></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/sidomuncul.png" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">PT.Industri Jamu dan Farmasi Sido Muncul Tbk</h4>
                                <h6 class="text-white"></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/nestle.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">PT.Nestle</h4>
                                <h6 class="text-white"></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/gudang.png" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">PT Gudang Garam Tbk</h4>
                                <h6 class="text-white"></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/unilever.png" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">PT.Unilever</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- PROJECTS -->
    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">CONTACT</h6>
                    <h1>Get In Touch</h1>
                    <p>Contact us for more details regarding cooperation and others</p>
                </div>
            </div>

            <form action="" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter E-mail">
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-10">
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button class="btn btn-primary">Contact</button>
                </div>
            </form>

        </div>
    </section><!-- CONTACT -->
    <footer>
        <div class="footer-top" id="footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <!-- <img class="logo" src="img/logo-white.svg" alt=""> -->
                        <h5 class="text-white">About Us</h5>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-white">Bryan Tanovento</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">001202000155</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-white">Cindy Zulani</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">001202000137</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">Tito Alexsta</h5>
                        <ul class="list-unstyled">
                            <li>001202000098</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">SSIP Final Project</a></p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>