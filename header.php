<?php

    session_start();
?>   
    
    
    <!-- Navigation Bar -->
    <nav class='navbar navbar-expand-md navbar-light bg-light sticky-top'>
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="https://library.kissclipart.com/20180902/avw/kissclipart-letter-c-logo-design-clipart-graphic-design-logo-eae34485f5130c7a.jpg" width="30" height="30" alt="">
            Comercio
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <?php
                  if (isset($_SESSION["useruid"])) {
                      echo "<li><a href='profile.php>Profile Page</a></li>";
                      echo "<li><a href='logout.php>Log Out</a></li>";
                  }
                  else {
                    echo "<li><a href='registration.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                  }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>