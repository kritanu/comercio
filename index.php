<?php
 include_once 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercio SRM</title>
    <link rel = "icon" href = "https://library.kissclipart.com/20180902/avw/kissclipart-letter-c-logo-design-clipart-graphic-design-logo-eae34485f5130c7a.jpg" type = "image/x-icon"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
</head>
<body>

    <!-- Carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/srm-univ.jpg" width="100%" height= auto alt="">
            <div class="carousel-caption" style="font-size:12px">
                <?php
                    if (isset($_SESSION["username"])) {
                        echo "<h1 class='display-2'>Welcome " . $_SESSION['username'] . "</h1>";
                        echo "<button type='button' class='btn btn-outline-light btn-lg'><a href='items.php'>Add Item/ SV</a></button>" . "   ";
                        echo "<button type='button' class='btn btn-outline-light btn-lg'><a href='listing.php'>View Listings</a></button><br><br>";
                      }
                    else {
                        echo "<h1 class='display-2'>Comercio</h1><br>";
                        echo "<button type='button' class='btn btn-outline-light btn-lg'><a href='registration.php'>Register Here!</a></button><br><br>";
                    }
                ?>
                <a class="scrollTo" href="#desc-start"><i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div id="desc-start" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Built for SRM.</h1>
                <hr>
                    <p class="lead">Local Commercial Services based Campus App.</p>
            </div>
        </div>
    </div>

    <!-- Tech Section -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-random"></i>
                <h3>Sell/ Buy Items</h3>
                <p>Everything has value.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-credit-card"></i>
                <h3>Offer Services</h3>
                <p>Earn pocket cash.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-hourglass-half"></i>
                <h3>Less time?</h3>
                <p>People work for money.</p>
            </div>
        </div>
    </div>


    <hr>
    <!-- Creator -->
    <div class="container-fluid padding">
        <div class="row padding">
            <!-- <div class="creator-padding"> -->
            <div class="col-lg-6 text-center">
            <br><br>
                <h2 class="center">The Creator</h2>
                <p class="center">A penultimate year software engineering student of SRM Institute of Science and Technology. Apart from academics, his hobbies include cooking, competitive sports and gaming.</p>
            <!-- </div> -->
            </div>
            <div class="col-lg-6">
                <img src="img/face.jpg" class="img-fluid center img-border ">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
    <div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-md-6">
            <hr class="light">
            <h5>Meeting Points</h5>
            <hr class="light">
            <p>M1 - UB Red Pipe</p>
            <p>M2 - Clock Tower</p>
            <p>M3 - Java Entry</p>
            <p>M4 - Tech Park Stairs</p>
        </div>
        <div class="col-md-6">
            <hr class="light">
            <img src="https://library.kissclipart.com/20180902/avw/kissclipart-letter-c-logo-design-clipart-graphic-design-logo-eae34485f5130c7a.jpg" width="30" height="30" alt="">
            <hr class="light">
            <p>+91 7977982445</p>
            <p>kritanu82@gmail.com</p>
            <p>SRM Univ, Kattankulathur</p>
            <p>Chennai 603203</p>
        </div>
    </div>
    </div>
    </footer>

    <!-- Scrolling to main desc -->
    <script type="text/javascript">
        function scrollTo(id) {
            if ($(id).length) {
                var getOffset = $(id).offset().top;
                var targetDistance = 20;
                $('html,body').animate({
                    scrollTop: getOffset - targetDistance
                }, 500);
            }
        }
        
        $('.scrollTo').click(function() {
            var getElem = $(this).attr('href');
            var targetDistance = 20;
            if ($(getElem).length) {
                var getOffset = $(getElem).offset().top;
                $('html,body').animate({
                    scrollTop: getOffset - targetDistance
                }, 500);
            }
            return false;
        });
    </script>

</body>
</html>