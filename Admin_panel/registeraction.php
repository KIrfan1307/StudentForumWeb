<?php
require('../db.php');
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //include '../db.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $usertype=$_POST["usertype"];
    $userdetails=$_POST["userdetails"];
    $existUserSQL="SELECT COUNT(*) FROM user WHERE username='$username'";
    $runUE=mysqli_query($db,$existUserSQL);
    $post=mysqli_fetch_assoc($runUE);
    if($post['COUNT(*)']>0){
        $exists=true;
        ?>
         <script>alert("User Already Exists");history.go(-1);</script>
       <?php
       exit();
    }
    $exists=false;
    if(($password == $cpassword) && $exists==false && $password != "" && strlen($password)>5){
        $password=password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user ( username, usertype,user_details, password) VALUES ('$username', '$usertype', '$userdetails','$password')";
        $result = mysqli_query($db, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Password error";?>
         <script>alert("Password error ");history.go(-1);</script>
       <?php
        exit();
    }
}?>  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <Script>alert("Your account is created ");history.go(-1);</Script><?="Hi"?>