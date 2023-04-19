<?php
include("../db.php");
$postid=$_GET['postid'];
echo $postid;
$stmt="DELETE FROM descriptions WHERE id =".$postid;
$runstmt=mysqli_query($db, $stmt);
header("location: Dashboard.php");
?>