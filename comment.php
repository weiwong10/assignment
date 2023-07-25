<?php
    include "connect.php";

    
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $dob=$_POST['dob'];
  $job=$_POST['job'];
  $comment=$_POST['comment'];

  $insert_image = $_FILES['image']['name'];
  $insert_image_size = $_FILES['image']['size'];
  $insert_image_tmp_name = $_FILES['image']['tmp_name'];
  
  if(!empty($insert_image)){
    if($insert_image_size > 100000){
        echo "<script>alert('Image is too big');</script>";
        echo "<script>window.location.href ='comment.php'</script>";
    }
    else{
        $image = addslashes(file_get_contents($insert_image_tmp_name));

            $query= "INSERT INTO  guest (guestName, guestEmail, contactNo, dob, guestJob, comment, image) VALUE ('$name','$email','$phone','$dob', '$job', '$comment', '$image')";
            mysqli_query($conn, $query);

            echo "<script>alert('Thanks for your comment');</script>";
            echo "<script>window.location.href ='indexGuest.php'</script>";     
        
    }
  }else{
        echo "<script>alert('Please insert image!');</script>";
        echo "<script>window.location.href ='comment.php'</script>";

  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Comment</title>
	<link rel="stylesheet" type="text/css" href="css/comment.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body style="background-color: #B1DDF1">

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

    <br><br><br><br><br>

    <div class="container">
    <div class="contact-box">
        <div class="left"></div>
        <div class="right">
            <form action="" method="post" enctype="multipart/form-data">
                <h2>Leave A Comment</h2>
                <label for="name">Your Name:</label>
                <input type="text" id="name" required class="field" name="name" placeholder="e.g Jay">

                <label for="email">Your Email:</label>
                <input type="text" id="email" required class="field" name="email" placeholder="e.g example@gmail.com">

                <label for="phone">Phone:</label>
                <input type="text" id="phone" required class="field" name="phone" placeholder="012-3456789">

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" required class="field" name="dob" placeholder="Date of birth">

                <label for="job">Job:</label>
                <input type="text" id="job" required class="field" name="job" placeholder="e.g Student">

                <label for="comment">Comment:</label>
                <textarea id="comment" required placeholder="Comment" name="comment" class="field"></textarea>

                <label for="comment">Your Image:</label>
                <input type="file" name="image">

                <br><br>
                <button type="submit" name="submit" class="btn">Send</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>