<?php
 include_once 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Meetings</title>
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
        <div class="header"><h1>Offers</h1></div>
        <br>
        <div class='text-center'>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'comercio');
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $user = $_SESSION['username'];
        $sql = "SELECT * FROM meeting ORDER BY MeetingPoint DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
        while($row = mysqli_fetch_assoc($result)) {
            if ($user == $row['seller']) {
                echo "<h4> Meeting Offer </h4>";
                echo "<h5> Item: " . $row["itemName"] . "<br>"
                . "Users Bid: ₹" . $row["usersBid"]. "<br>" 
                . "User: " . $row["usersName"] ."<br>" 
                . "Mob: +91 " . $row["usersPhone"]. "<br>" 
                . "Email: " . $row["usersEmail"]. "</h5>".
                "Meeting Point: M" . (fmod($row["meetingPoint"], 4)+1) . "<br><br>";
            }
            if ($user == $row['usersName']) {

                echo "<h4> Offer Sent </h4>";
                echo "<h5> Item: " . $row["itemName"] . "<br>"
                . "Your Bid: ₹" . $row["usersBid"]. "</h5><br>";
            }
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
        ?>
        </div>
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