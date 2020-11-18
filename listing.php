<?php
 include_once 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listings</title>
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
        <div class="header">
            <h2>Listings</h2>
        </div>
        <br>
        <div class='text-center'>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'comercio');
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM item SORT ORDER BY itemId DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<h3>" . $row["itemName"] ." - ₹" . $row["itemPrice"]."</h3>" . $row["itemDesc"]."<br>";
            echo "<form action='includes/listing.inc.php' method='post'>
            <label for='bid'>Your Bid:</label><br>
            <input type='text' id='bid' name='bid' size='6'>
            <input type='hidden' name='username' value=" . $_SESSION['username'] . ">
            <input type='hidden' name='email'  value=" . $_SESSION['email'] . ">
            <input type='hidden' name='phone'  value=" . $_SESSION['phone'] . ">
            <input type='hidden' name='itemname'  value=" . $row["itemName"] . ">
            <input type='hidden' name='seller'  value=" . $row["usersName"] . ">"
            . "<input type='submit' name='submit' value='Buy'></form>";
            if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput") {
                    echo "<p> Place a bid!</p><br>";
                }
            }
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
        ?>
        </div>
    </div>
</body>
</html>