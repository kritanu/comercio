<?php
 include_once 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
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
    <div class="container" style="width:600px;">
        <div class="header"><h2>Add Item</h2></div>
        <form id="form" class="reg-form" action="includes/items.inc.php" method="post">
            <div class="form-control">
                <label>Item Name</label>
                <input type="text" placeholder="ITEM" id="itemname" name="itemname" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Item Description</label>
                <input type="text" placeholder="ABC 123 XYZ" id="itemdesc" name="itemdesc" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Item Price</label>
                <input type="text" placeholder="₹₹₹" id="itemprice" name="itemprice" />
                <small>Error message</small>
            </div>
            <input type="hidden" name="username"  value="<?php echo $_SESSION['username']; ?>">
            <input type="hidden" name="email"  value="<?php echo $_SESSION['email']; ?>">
            <input type="hidden" name="phone"  value="<?php echo $_SESSION['phone']; ?>">
            <button type="submit" name="submit">Add Item</button>
            <br>
            <div class='text-center'>
            <?php
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput") {
                        echo "<p> Fill all the fields!</p>";
                    }
                    if($_GET["error"] == "none") {
                        echo "<p>Successfully Added.</p>";
                    }
                }
            ?>
            </div>
        </form>
    </div>
    <br><br>
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

</body>
</html>