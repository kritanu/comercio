<?php
 include_once 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercio PHP</title>
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
        <div class="header"><h2>Registration</h2></div>

        <form id="form" class="reg-form" action="includes/registration.inc.php" method="post">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="ABC123" id="username" name="username" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="abc@srmist.edu.in" id="email" name="email" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="phone">Phone</label>
                <input type="text" placeholder="xxxx-xxx-xxx" id="phone" name="phone"/>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="******" id="password" name="password"/>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password2">Re-Type Password</label>
                <input type="password" placeholder="******" id="password2" name="password2" />
                <small>Error message</small>
            </div>
            <button type="submit" name="submit" onclick="checkInputs()">Create Account</button>
            <p class="message"> Already Registered? <a href='#'>Login</a></p>
        </form>
    </div>

</body>
</html>