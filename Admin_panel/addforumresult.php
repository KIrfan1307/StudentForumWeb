<?php
require('../db.php');
$sessionusername= $_GET['sessionusername'];
$sql1="SELECT id FROM user WHERE username=".$sessionusername;
$runSQL1=mysqli_query($db, $sql1);
$sessionuserid=mysqli_fetch_assoc($runSQL1)['id'];
if(isset($_POST['submit'])){
    if(isset($_POST['blog-title'])){
      $BLOGTITLE=$_REQUEST['blog-title'];
    }
    if(isset($_POST['blog-content'])){
      $BLOGCONTENT=$_REQUEST['blog-content'];
    }
    $blogQuery="INSERT INTO descriptions VALUES(NULL,'$BLOGTITLE','$BLOGCONTENT','$sessionuserid', 'current_timestamp()')";
    $getBlogQuery="SELECT max(id) FROM posts";
    if($BLOGTITLE != null && $BLOGCONTENT != null){


}}
?>