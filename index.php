<?php 
session_start();
 $koneksi = new mysqli("localhost","root","","nerotoko");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISeng</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/aos (2).css">

    <link rel="stylesheet" href="css/main (3).css">

</head>

<body>

    <div class="main">
        <header class="index">
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                    <span>+</span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="keranjang.php">Keranjang</a>
                                    <span>+</span>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                    <span>+</span>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="checkout.php">Check-Out</a>
                                </li>


                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
            <div class="head-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6 float-left">
                            <h2 class="text-uppercase"><I>The</I>
                                <span>Chaniago</span>

                            </h2>
                            <P>THE CHANIAGO OFFICIAL STORE</P>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 float-right social">

                            <div class="search-box">
                                <input type="text" required placeholder="Search for products">
                                <a href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="banner">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="../nerotoko/f1.jpg" alt="First slide">

                        <div class="carousel-caption d-md-block main-block">
                            <h5></h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block" src="../nerotoko/f2.jpg" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <h5></h5>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev left" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true">

                    </span>

                </a>
                <a class="carousel-control-next right" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true">

                    </span>

                </a>
            </div>
        </section>


       

        <section class="latest">
            <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" class="lathead">
                <h3>LIST PRODUK</h3>
            <br>
            </div>


            <div class="container">
                <div class="row">
                        <?php $ambil= $koneksi->query("SELECT * FROM produk"); ?>
                        <?php while( $perproduk=$ambil->fetch_assoc()){?>

                    <div data-aos="fade-up" data-aos-duration="500" class="col-12 col-sm-6 col-md-4">
                        <div class="lat">
                            <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>">
                                <figure>
                                    <img src="foto_produk/<?php echo $perproduk['foto_produk']?>" alt="chair">
                                </figure>
                                <span><font size="1">Rp<?php echo $perproduk['harga_produk']?></font></span>
                                <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                                <h6 class="text-uppercase"><font color="black" size="4"> <?php echo $perproduk['nama_produk']?> </font></h6>
                            </a>
                        </div>
                    </div>
                    <?php }?>




                 </div>
        </div>
        </section>


        


       

        <footer>
            <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800" class="container">
                <div class="row">
                    <div class="col-12 col-sm-5">
                        <div class="brand site">
                            <h3><I>NERO</I>
                                <span></span>
                            </h3>
                           
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="site">
                                    <h4 class="text-uppercase drop">
                                        site navigation
                                        <i class="fa fa-angle-down float-right d-sm-none" aria-hidden="true"></i>
                                    </h4>
                                    <ul class="list">
                                        <li>
                                            <a href="index.html">GO TO HOME</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                                       <div class="brand site">
                                          <h3>OFFICIAL
                                            <span>_STORE</span>
                                        </h3>
                           
                        </div>
                        </div>

                    </div>

                </div>

            </div>




        </footer>

        <div class="footer text-center text-uppercase float-left w-100">
            <p>(C) 2017, All rights reserved. thespacious theme. designed by
                <a href="https://www.template.net/editable/websites/html5">template.net</a>
            </p>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>

</html>