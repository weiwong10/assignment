<?php 
include "connect.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/805d306191.js" crossorigin="anonymous"></script>

    <title>Personal WebSite</title>
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

    <div class="box">
        <br><br>
        <img src="image/me.jpg" alt="" class="box-img">
        <h1>Hi, I am Ten Wei Wong</h1>
        <h5>Student of UTeM</h5>
        <p>Hi, I'm Ten Wei Wong, a Computer Science student at UTeM Melaka, specializing in Database Management. I enjoy coding and problem-solving, and I'm passionate about exploring the world of technology. Looking forward to connecting with fellow enthusiasts and sharing experiences!</p>
        <br>
        <br>
        <ul>
            <li><a href="#view"><i class="fa-regular fa-lightbulb"></i> View Comment</a></li>
            <li><a href="comment.php"><i class="fa-solid fa-comment"></i> Leave A Comment</a></li>
        </ul>

    </div>

    <div style="background-color: #B1DDF1">
    <br>
    <h1 style="text-align: center;">Biography</h1><br>

    <section class="box-container">
    <div class="box1">
        <img src="image/email.png" alt="">
        <h3>My Email</h3>
        <a href="tweiw10@gmail.com">tweiw10@gmail.com</a>
    </div>

    <div class="box1">
        <img src="image/phone.png" alt="">
        <h3>Contact Number</h3>
        <p>012-9611886</p>
    </div>

    <div class="box1">
        <img src="image/university.png" alt="">
        <h3>University</h3>
        <a href="https://www.utem.edu.my/en/">Universiti Teknikal Malaysia Melaka</a>
    </div>

    <div class="box1">
        <img src="image/address.png" alt="">
        <h3>Address</h3>
        <a href="#">Melaka</a>
    </div>

    </section>


    <!--  -->
    <br><br>
    <h1 style="text-align: center;">All comment </h1><br>

    <div id="view" class="container">
       <?php 
        $query = "SELECT * FROM guest";
        $result = mysqli_query($conn,$query);
        while($row= mysqli_fetch_assoc($result)){

       ?>
        <div class="card">
            <div class="img">
               <img src="data:image;base64,<?php echo base64_encode($row["image"]); ?>">
            </div>
            <div class="top-text">
               <div class="name">
                  <?php echo $row['guestName']?>
               </div>
               <p>
                  <?php echo $row['guestJob']?>
               </p>
            </div>
            <div class="bottom-text">
               <div class="text">
                   <?php echo $row['comment']?>
                </div>
               <div class="btn">
                  <a href="card.php?Id=<?php echo $row['guestID']?>">Read more</a>
               </div>
            </div>
         </div>
        
        <?php
        }
        ?>
         
      </div>
    </div>

        <br>
    <!--  -->
</body>
</html>

