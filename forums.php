<?php
    require('db.php');
    $descriptionQuery="SELECT * FROM descriptions WHERE author='Principal' ORDER BY id DESC";
    $descriptionQuery1="SELECT * FROM descriptions WHERE author='Office' ORDER BY id DESC";
    $descriptionQuery2="SELECT * FROM descriptions WHERE author!='Office' AND author!='Principal' ORDER BY id DESC";
    $runDQ=mysqli_query($db,$descriptionQuery);
    $runDQ1=mysqli_query($db,$descriptionQuery1);
    $runDQ2=mysqli_query($db,$descriptionQuery2);
    
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
    </header>
    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>General Information By Authority</h1>
            </div>
            <?php
                while($post=mysqli_fetch_assoc($runDQ)){
                ?>
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center">
                        <i class="fa fa-user-check center"></i>
                    </div>
                    <div class="subforum-description subforum-column">
                        <h4><a href="#"><?=$post['description_title']?></a></h4>
                        <p><?=$post['description_content']?></p>
                    </div>
                    
                    <div class="subforum-info subforum-column">
                        <b><a href="">Last post &nbsp </a></b>&nbsp  by &nbsp<a href=""><?=$post['author']?></a> 
                        <br>on <small><?=date('F jS, Y',strtotime($post['created_at']))?></small>
                    </div>
                </div>
            <?php
            }
            ?>
            
        </div>
        <!--More-->
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>General Information By Office</h1>
            </div>
            <?php
             while($post=mysqli_fetch_assoc($runDQ1)){
            ?>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-desktop center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="#"><?=$post['description_title']?></a></h4>
                    <p><?=$post['description_content']?></p>
                </div>
                
                <div class="subforum-info subforum-column">
                <b><a href="">Last post &nbsp </a></b>&nbsp  by &nbsp<a href=""><?=$post['author']?></a>
                    <br>on <small><?=date('F jS, Y',strtotime($post['created_at']))?></small>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        
        <div class="subforum">
            <div class="subforum-title">
                <h1>General Information</h1>
            </div>
                <?php
                while($post=mysqli_fetch_assoc($runDQ2)){
                    ?>
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center">
                        <i class="fa fa-school-circle-exclamation center"></i>
                    </div>
                    <div class="subforum-description subforum-column">
                        <h4><a href="#"><?=$post['description_title']?></a></h4>
                        <p><?=$post['description_content']?></p>
                    </div>
                    
                    <div class="subforum-info subforum-column">
                        <b><a href="">Last post &nbsp </a></b>&nbsp  by &nbsp<a href=""><?=$post['author']?></a>
                        <br>on <small><?=date('F jS, Y',strtotime($post['created_at']))?></small>
                    </div>
                </div>
                <?php
                }
                ?>
        </div>
        <!---->
    </div>

    <!-- Forum Info -->
    <div class="forum-info">
        <div class="chart">
            StudentForum - Stats &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>5,369</u> Posts in <u>48</u> Topics by <u>8,124</u> Members.</span><br>
        <span>Latest post: <b><a href="">Random post</a></b> on Dec 15 2021 By <a href="">RandomUser</a></span>.<br>
        <span>Check <a href="">the latest posts</a> .</span><br>
    </div>

    <footer>
        <span>&copy;  Irfan Kazi | All Rights Reserved</span>
    </footer>
    <script src="main.js"></script>
</body>
</html>