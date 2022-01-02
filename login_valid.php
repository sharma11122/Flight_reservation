<?php
require 'includes/common.php';
$error="Invalid Email or Password";

$user= mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = md5($_POST["password"]);

$query = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
$query_result = mysqli_query($conn, $query);

if(mysqli_num_rows($query_result)==0){
   $_SESSION["error"]=$error;
   header("location: login.php");

}else{
    mysqli_fetch_array($query_result);
    $_SESSION['fname']=$user;
    $_SESSION['email_id']=$email;
    $_SESSION["id"]=$row["id"]; 
    

   header("location: search.php");
}
?>