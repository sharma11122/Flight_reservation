<?php
    require "./includes/common.php";
    // get details
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["password"]);

    
      
   $query1="SELECT * from  `user` where `email`='$email'";
   $query2="INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `con_password`) VALUES ('$fname', '$lname', '$email', '$password', '$cpassword')"; 

    
    $result = $conn->query($query1);
    if($result->num_rows>0)
    {
      echo"<script>alert('Sorry!!! This User Is Already Exist!');</script>";
      echo "<script>window.location = 'signup.php';</script>";;

    }
   else{
     $result=mysqli_query($conn,$query2);
     $_SESSION["email_id"]=$email;
     $_SESSION["fname"]=$fname;
     $_SESSION["lname"]=$lname;
     $_SESSION["id"]=mysqli_insert_id($conn);
     echo"<script>alert('Your Account Created Successful');</script>";
     echo "<script>window.location = 'login.php';</script>";;
  

   }
   
?>