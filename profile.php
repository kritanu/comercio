<?php
 include_once 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel = "icon" href =
    "https://library.kissclipart.com/20180902/avw/kissclipart-letter-c-logo-design-clipart-graphic-design-logo-eae34485f5130c7a.jpg"
    type = "image/x-icon"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
</head>
<body>
    <div class="container">
        <div class="header"><h2>
        <?php echo $_SESSION['username'] . "'s Account";?>
        </h2>
        </div>
        <br>
        <div class='text-center'>
        <form id="form" class="user-form">
            <div class="form-control">
                <label for="username">Username : <?php echo $_SESSION['username'];?> </label>
                <br>
            </div>
            <div class="form-control">
                <label for="email">Email : <?php echo $_SESSION['email'];?> </label>
                <br>
            </div>
            <div class="form-control">
                <label for="phone">Phone : +91 <?php echo $_SESSION['phone'];?> </label>
                <br>
            </div>
        </form>
    </div>

</body>
</html>