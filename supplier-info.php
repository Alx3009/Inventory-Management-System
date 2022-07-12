<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="csstyle.css" />
    <link rel="stylesheet" href="css/stylenavbar.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-light fixed-top" style="background-color: #0d6efd;">
        <div class=" container">
            <a class="navbar-brand" href="#">
                <img src="img/bctlogo1.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #0d6efd;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BCT COMPANY</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> -->
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="stock.php">Display Data</a></li>
                                <li><a class="dropdown-item" href="tambah.php">Add Data</a></li>
                                <li><a class="dropdown-item" href="stock-copy.php">Update & Delete Data</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Suppliers
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="supplier.php">Display Suppliers</a></li>
                                <li><a class="dropdown-item" href="supplier-add.php">Add Suppliers</a></li>
                                <li><a class="dropdown-item" href="supplier-copy.php">Update & Delete Suppliers</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                <li><a class="dropdown-item" href="registrasi.php">Create New Admin</a></li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <!-- <a href="supplier.php">BACK</a> -->

    <div class="container">

        <div class="form">
            <div class="contact-info">
                <h3 class="title">PT. Unilever Indonesia</h3>
                <p class="text">
                    Established on 5 December 1933, Unilever Indonesia has grown to become one of Indonesia’s leading multinational Fast Moving Consumer Goods companies with purpose-led brands and people.
                </p>

                <div class="info">
                    <div class="information">
                        <img src="img/location.png" class="icon" alt="" />
                        <p>Gama Tower 27th Floor, Jl. H. R. Rasuna Said, Jakarta 12940</p>
                    </div>
                    <div class="information">
                        <img src="img/email.png" class="icon" alt="" />
                        <p>unvr.indonesia@unilever.com</p>
                    </div>
                    <div class="information">
                        <img src="img/phone.png" class="icon" alt="" />
                        <p> (021) 5264020.</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="https://web.facebook.com/unileverid/?_rdc=1&_rdr">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=https://www.unilever.co.id/brands/setiap-u-beri-kebaikan/&text=">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/unileveridn/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Fwww.unilever.co.id%2Fbrands%2Fsetiap-u-beri-kebaikan%2F">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="index.html" autocomplete="off">
                    <h3 class="title">Let's get in touch</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22436.313144264448!2d106.82877053464404!3d-6.235062994968923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f392f721b003%3A0x45b87107f6628988!2sPT.%20Unilever%20Indonesia!5e0!3m2!1sen!2sid!4v1639301196951!5m2!1sen!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </form>
            </div>
        </div>

    </div>


    <div class="container">

        <div class="form">
            <div class="contact-info">
                <h3 class="title">Nestlé</h3>
                <p class="text">
                    Nestlé S.A. is a Swiss multinational food and drink processing conglomerate corporation headquartered in Vevey, Vaud, Switzerland. </p>

                <div class="info">
                    <div class="information">
                        <img src="img/location.png" class="icon" alt="" />
                        <p>Karawang Regency, West Java</p>
                    </div>
                    <div class="information">
                        <img src="img/email.png" class="icon" alt="" />
                        <p>Stephan.Sinisuka@id.nestle.com</p>
                    </div>
                    <div class="information">
                        <img src="img/phone.png" class="icon" alt="" />
                        <p>(0267) 8630353</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="https://web.facebook.com/Nestle?_rdc=1&_rdr">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/Nestle">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/nestle/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/nestle-s-a-/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="index.html" autocomplete="off">
                    <h3 class="title">Let's get in touch</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.846885270157!2d107.33363835016947!3d-6.413714064486488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69779190147a97%3A0x214bf5c1b638871f!2sPT%20Nestle%20Indonesia%20Factory!5e0!3m2!1sen!2sid!4v1639374384505!5m2!1sen!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </form>
            </div>
        </div>

    </div>


    <div class="container">

        <div class="form">
            <div class="contact-info">
                <h3 class="title">Procter & Gamble</h3>
                <p class="text">
                    The Procter & Gamble Company is an American multinational consumer goods corporation headquartered in Cincinnati, Ohio, founded in 1837 by William Procter and James Gamble.
                </p>

                <div class="info">
                    <div class="information">
                        <img src="img/location.png" class="icon" alt="" />
                        <p>Sentral Senayan III, Jakarta 10270</p>
                    </div>
                    <div class="information">
                        <img src="img/email.png" class="icon" alt="" />
                        <p>proctergamble@id.pg.com</p>
                    </div>
                    <div class="information">
                        <img src="img/phone.png" class="icon" alt="" />
                        <p>(021) 57950460</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="https://web.facebook.com/proctergamble?_rdc=1&_rdr">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/ProcterGamble">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/proctergamble/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/procter-and-gamble/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="index.html" autocomplete="off">
                    <h3 class="title">Let's get in touch</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2094538603483!2d107.29468695016901!3d-6.366934064032479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6975fdd00fdc99%3A0xa3ec78d01de726c2!2sPT%20P%26G%20Operations%20Indonesia!5e0!3m2!1sen!2sid!4v1639374818069!5m2!1sen!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>

                </form>
            </div>
        </div>

    </div>

    <script src="app.js"></script>
</body>

</html>