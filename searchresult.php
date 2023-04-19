<?php
include("db.php");
$keyw=$_GET['q'];
$sqlstatement="SELECT * FROM user WHERE username LIKE '%".$keyw."%' ORDER BY id DESC";
$run=mysqli_query($db,$sqlstatement);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="all.css">
    <script src="all.js"></script>
</head>
<body>
<div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="forums.php">Forums</a></li>
                    <li class="nav-item"><a href="posts.php">Posts</a></li>
                    <li class="nav-item"><a href="detail.php">Detail</a></li>
                    <li class="nav-item"><a href="Admin_panel/login.php">Login</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">Student Forum</div>
        </div>
    <div class="body-a">
        <?php
        while($post=mysqli_fetch_assoc($run)){ ?>
        <div class="authors">
            <?=$post['username']?>
        </div> 
        <div class="content">
        <?=$post['usertype']?><br>
        <?=$post['user_details']?>
        </div>
        <hr>
      <?php  } ?>
    </div>
    <script src="main.js"></script>
</body>
</html>