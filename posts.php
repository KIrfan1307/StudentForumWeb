<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location: Admin_panel/login.php");

    exit;
}
    require('db.php');
    
    $forumQuery="SELECT * FROM forum";
    $runFQ=mysqli_query($db,$forumQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="all.css">
    <script src="all.js"></script>
</head>

<body>
    <header>
        <!--NavBar Section-->
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
    </header>
    <div class="container">

        <!--Navigation-->
        <!--Display posts table-->
        <div class="posts-table" scrollable="true">
            <div class="table-head">
                
                <div class="subjects">Messages</div>
                <div class="last-reply">Message by</div>
            </div>
            <?php
            while($post=mysqli_fetch_assoc($runFQ)){
                ?>
            <div class="table-row">
                <div class="subjects">
                    <p><?=$post['forum_content']?></p>
                </div>
                <div class="last-reply">
                <?=$post['created_at']?>
                    <br>By <b><a href="searchresult.php?q=<?=$post['author']?>"><?=$post['author']?></a></b>
                </div>
            </div>
            <?php } ?>
            <form action="chatform.php" method="post">
            
                
                <textarea class="" style="width:100%; height:30%; font-size:20px; " placeholder="add your message" name="forumcontent"></textarea>
                
                <button type="submit"><i class="fas fa-pen"  id="button-addon2"></i></button>
                <button type="reset" ><i  class="fas fa-eraser" id="button-addon3"></i></button>
                
            
            </form>
                <!--Status Note-->
        <footer>
            <span>&copy; &nbsp;Irfan Kazi | All rights Reserved.</span>
        </footer>
        <script src="main.js"></script>
    </body>
</html>