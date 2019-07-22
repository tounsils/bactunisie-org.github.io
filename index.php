<!DOCTYPE html>
<html lang="en">
<?php include_once "config.php"; ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $domainName; ?> is For Sale</title>
    <meta name="description" content="<?php echo $domainDescription; ?>">
    <meta name="keywords" content="<?php echo $domainKeywords; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/brionz_red.png"> 

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Shake Animation -->
    <link rel="stylesheet" type="text/css" href="css/csshake.min.css">
    
</head>

<body>

    <!-- Start your project here-->

<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="#"><img src="img/svg/brionz_red.svg" height="30px"> <?php echo $domainTitle; ?></a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <!--Navbar icons-->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item">
                        <a href="#" target="_blank" class="nav-link"><i class="text-danger fa fa-facebook"></i> /<?php echo $domainTitle; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" target="_blank" class="nav-link"><i class="text-danger fa fa-twitter"></i> @<?php echo $domainTitle; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" target="_blank" class="nav-link"><i class="text-danger fa fa-instagram"></i> /<?php echo $domainTitle; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" target="_blank" class="nav-link"><i class="text-danger fa fa-linkedin"></i> /<?php echo $domainTitle; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="red-youtube hm-teal-slight">
        <div class="full-bg-img flex-center">

            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-lg-6">
                        <div class="description">
                            <h2 class="h2-responsive wow fadeInLeft">Domain Name For Sale</h2>
                            <hr class="hr-light wow fadeInLeft">
                            <p class="wow fadeInLeft" data-wow-delay="0.4s">
                            <?php echo $domainAge; ?> available for sale. 10 years old premium domain name available for instantly purchase. 
                            Invest in a premium domain name to launch your business.        
                        </p>
                        <p class="wow fadeInLeft" data-wow-delay="0.4s">
                            <br>
                            <?php echo $domainText; ?>
                            <br>
                            <?php echo $domainAdsense; ?>
                            </p>

                        </div>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-lg-6">
                        <!--Form-->
                        <form method="POST" action="http://formspree.io/tn76contact@gmail.com">
                        <div class="card wow fadeInRight">
                            <div class="card-block">
                                <!--Header-->
                                <div class="text-center">
                                    <h3><i class="shake-constant shake-chunk fa fa-handshake-o"></i> Offer Form</h3>
                                    <hr>
                                </div>

                                <!--Body-->
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form3" class="form-control">
                                    <label for="form3">Name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Email</label>
                                </div>

                                <!--Textarea with icon prefix-->
                                <div class="md-form">
                                    <i class="fa fa-dollar prefix"></i>
                                    <input type="text" name="website" value=<?php echo $domainName; ?> hidden>
                                    <input type="text" id="form8" class="md-textarea" name="price">
                                    <label for="form8">Minimum offer $1000</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg">Send</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                </div>

            </div>
        </div>
    </div>
    <!--/.Mask-->
</header>

    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script async type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script async type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script async type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script async type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
