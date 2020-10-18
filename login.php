<?php
 include_once 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercio Registration</title>
    <link rel = "icon" href =
    "https://library.kissclipart.com/20180902/avw/kissclipart-letter-c-logo-design-clipart-graphic-design-logo-eae34485f5130c7a.jpg"
    type = "image/x-icon"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <script src='js/validate.js'></script>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Login</h2></div>
        <form id="form" class="reg-form" action="includes/registration.inc.php" method="post">
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="abc@srmist.edu.in" id="email" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="******" id="password"/>
                <small>Error message</small>
            </div>
            <button type="button" onclick="checkInputs()">Login</button>
            <p class="message"> New User? <a href='#'>Register</a></p>
        </form>
    </div>

</body>
</html>