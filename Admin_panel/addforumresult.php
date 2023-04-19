<?php
require('../db.php');
$sessionusername= $_GET['sessionusername'];
$sql1="SELECT id FROM user WHERE username='$sessionusername'";
$runSQL1=mysqli_query($db, $sql1);
$sessionuserid=mysqli_fetch_assoc($runSQL1)['id'];
if(isset($_POST['submit'])){
    if(isset($_POST['blog-title'])){
      $BLOGTITLE=$_REQUEST['blog-title'];
    }
    if(isset($_POST['blog-content'])){
      $BLOGCONTENT=$_REQUEST['blog-content'];
    }
    $BLOGTYPE=$_REQUEST['blog-type'];
    $blogQuery="INSERT INTO descriptions VALUES(NULL,'$BLOGTITLE','$BLOGCONTENT','$sessionuserid','$BLOGTYPE', NULL)";
    if($BLOGCONTENT != "" && $BLOGTITLE != "" && $BLOGTYPE !="select") {
      $runbq=mysqli_query($db,$blogQuery);
    }
    else{
      ?><script>alert("TITLE, CONTENT,TYPE Should not be empty"); history.go(-1);</script><?php
    }
    // $getBlogQuery="SELECT max(id) FROM posts";
    // if($BLOGTITLE != "" && $BLOGCONTENT != ""){}


}
header("location: Dashboard.php");
?>