<?php
include "connect.php";

$guestID = $_GET['Id'];

$query = "SELECT * FROM guest WHERE guestID = '$guestID'";
$result = mysqli_query($conn,$query);
$row= mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/CSS" href="css/card.css" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        
        <title>Guest Details</title>

    </head>
	<body>

    <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="#home" class="w3-bar-item w3-button"><b>Bio</b> Data</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
        <a href="indexGuest.php" class="w3-bar-item w3-button">Home</a>
        <a href="comment.php" class="w3-bar-item w3-button">Comment</a>
        </div>
    </div>
    </div>


    <br>
    <br>
    <h1 style="text-align: center;">Guest Information </h1><br><br>

<div class="wrapper">
    <div class="left">
        <img src="data:image;base64,<?php echo base64_encode($row["image"]); ?>" alt="user" height="auto" width="100">
        <h4><?php echo $row['guestName']?></h4>
        <h5><?php echo $row['dob']?></h5><br>
        <h6><?php echo $row['guestJob']?></h6>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p><?php echo $row['guestEmail']?></p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p><?php echo $row['contactNo']?></p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Comment</h3>
            <div class="projects_data">
                <?php echo $row['comment']?>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
              <li class="back-button"><a href="indexGuest.php">Back</a></li>
              <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li> -->
          </ul>
      </div>
    </div>
</div>
	</body>
</html>