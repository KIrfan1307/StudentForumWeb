<?php
include("../db.php");
session_start();
if(!isset($_SESSION['username']))
{
    header("location: login.php");
    exit;
}
$sessionusername=$_SESSION['username'];
$ids="SELECT id FROM user WHERE username ='$sessionusername'";
$runIDS=mysqli_query($db,$ids);
$post=mysqli_fetch_assoc($runIDS);
$sessionuserid=$post['id'];
$SUDs="SELECT * FROM descriptions WHERE author='$sessionuserid'";
$runSuds=mysqli_query($db,$SUDs);
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
    <title>Dashboard</title>
  </head>
  <body>
    
  <?php
    require("Navbar.php");
    ?><br><h1><?="Hi ".$_SESSION['username']?></h1>
   <!-- <h2>Add Forum<a id="dropButton"><i class="fa fa-sort-desc"></i></a></h2> -->
   <center>
   <h1>Add an announcement here </h1>
  <div class="form-a" id="addblog" >
      <form action="addforumresult.php?sessionusername=<?=$sessionusername?>" method="post" name="addblogform" id="addblogform" enctype="multipart/form-data">
      <table>
        <tr>
          <td><label for="blog-title">Enter title</label></td>
          <td><p>  &nbsp &nbsp &nbsp </p></td>
          <td><textarea  id="blog-title" name="blog-title" cols="100" autocomplete="off"></textarea></td>
        </tr>
        <tr>
          <td><label for="blog-type">Type of content</label></td>
          <td><p> &nbsp &nbsp &nbsp</p></td>
          <td><select name="blog-type" id="blog-type">
          <option value="select">----select----</option>
          <option value="Notice">Notice</option>
          <option value="Announcement">Announcement</option>
          <option value="Reminder">Reminder</option>
          <option value="Circular">Circular</option>
          <option value="Information">Information</option>
          </select></td>
        </tr>
        <tr>
          <td><label for="blog-content">Content</label></td>
          <td><p> &nbsp &nbsp &nbsp</p></td>
          <td><textarea  id="blog-content" name="blog-content" cols="100" rows="20" autocomplete="off"></textarea></td>
        </tr>

      </table>
        <br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
      </form>
      </div>
    </center>
      <!-- <script type="text/javascript">
        document.getElementById("dropButton").onclick = function() {
            document.getElementById("addblog").style.display="block";
            document.getElementById("dropButton").style.display = "none";    
        }
        document.getElementById("upButton").onclick = function() {
            document.getElementById("addblog").style.display = "none";
            document.getElementById("dropButton").style.display = "block";
        }
        </script> -->
        <br><br><br><br>
        <table id="posts-table" name="posts-table">
          <tr>
            <th id="posts-h1" name="posts-h1">
              Date
            </th>
            <th id="posts-h2" name="posts-h2">
              Posts created by you
            </th>
            <th id="posts-h3" name="posts-h3">
            <i class="fa fa-trash"></i>
            </th>
          </tr>
          <?php
          while($post1=mysqli_fetch_assoc($runSuds)){ ?>
          <tr>
            <td id="posts-d1">
              <?=$post1['created_at']?>
            </td>
            <td id="posts-d2">
              <b><?=$post1['description_title']?></b><br>
              <?=$post1['description_content']?>
            </td>
            <td id="posts-d2">
              <a href="deletepost.php?postid='<?=$post1['id']?>'"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
            <?php } ?>
        </table>
  </body>
</html>