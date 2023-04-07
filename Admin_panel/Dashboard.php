<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location: login.php");
    exit;
}
$sessionusername=$_SESSION['username'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../all.css">
    <script type="text/javascript" src="../all.js"></script>
    <title>SignUp</title>
  </head>
  <body>
  <?php
    require("Navbar.php");
    echo "This is Dashboard ";?><br><?php
    echo "Hi ".$_SESSION['username'];
   ?>
   <h2>+Forum<a id="dropButton"><i class="fa fa-sort-desc"></i></a></h2>
   <center>
  <div class="form-a" id="addblog" style="display:none;">
      <form action="addforumresult.php?sessionusername=<?=$sessionusername?>" method="post" name="addblogform" id="addblogform" enctype="multipart/form-data">
        <label for="blog-title">Enter title</label><br>
        <textarea  id="blog-title" name="blog-title" cols="100" autocomplete="off"></textarea><br>
        <label for="blog-type">Type</label>
        <label for="blog-content">Content</label><br>
        <textarea  id="blog-content" name="blog-content" cols="100" rows="30" autocomplete="off"></textarea><br>
        <input type="submit" name="submit" id="submit">
        <br>
        <h1><a id="upButton"><i class="fa fa-sort-asc"></i></a></h1>
      </form>
      </div>
      <script type="text/javascript">
        document.getElementById("dropButton").onclick = function() {
            document.getElementById("addblog").style.display="block";
            document.getElementById("dropButton").style.display = "none";    
        }
        document.getElementById("upButton").onclick = function() {
            document.getElementById("addblog").style.display = "none";
            document.getElementById("dropButton").style.display = "block";
        }
        </script>
</center>
  </body>
</html>
