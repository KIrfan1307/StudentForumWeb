<?php
 require('db.php');
 session_start();
 $sessionusername=$_SESSION['username'];
 $forum_content=$_POST['forumcontent'];
 if($forum_content != "" && $sessionusername != ""){
 $chatQuery="INSERT INTO forum values(NULL,'$forum_content','$sessionusername',NULL)";
 $run=mysqli_query($db,$chatQuery);
 }
 header("location: posts.php");
?>
<!-- <script>history.go(-1);</script> -->