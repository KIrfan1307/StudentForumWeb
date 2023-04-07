<?php
require('db.php');

// printf($db);
$userstmt="SELECT * FROM user";

$noofdescriptionsstmt="";
$runUS=mysqli_query($db,$userstmt);
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
        <!--SearchBox Section-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Everything</option>
                    <option value="Titles">Titles</option>
                    <option value="Descriptions">Descriptions</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    <div class="container">
        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <div class="head">
                <div class="authors">Author</div>
            </div>

            <div class="body-a">
            <?php while($post=mysqli_fetch_assoc($runUS)) 
                    { 
                        $author=$post['id'];
                        $noofdescriptionsstmt="SELECT count(*) FROM descriptions WHERE author=".$author;
                        $runN=mysqli_query($db,$noofdescriptionsstmt);
                        $post1=mysqli_fetch_assoc($runN);
                    ?>
                <div class="authors">
                    
                        <div class="username"><a href=""><?=$post['username']?></a></div>
                        <div><?=$post['usertype']?></div>
                        <div>Posts: <u><?=$post1['count(*)']?></u></div>
                        <div>Points: <u>4586</u></div>
                </div>
                <div class="content">
                    <?=$post['user_details']?>
                    <br>
                </div>
                  <hr> 
                <?php 
                    }
                    ?>
            </div>
        </div>

        <!--Comment Area-->
        <div class="comment-area hide" id="comment-area">
            <textarea name="comment" id="" placeholder="comment here ... "></textarea>
            <input type="submit" value="submit">
        </div>
        <div class="comment-area hide" id="reply-area">
            <textarea name="reply" id="" placeholder="reply here ... "></textarea>
            <input type="submit" value="submit">
        </div>
    </div>
    <footer>
        <span>&copy;  Irfan Kazi | All Rights Reserved</span>
    </footer>
    <script src="main.js"></script>
</body>
</html>