<?php
    require "./includes/common.php";
    // get details
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
    $adhar = mysqli_real_escape_string($conn, $_POST["aadhar"]);;

    
      
   $query2="INSERT INTO `customer` (`email`, `name`,`contact`, `adhar`) VALUES ('$email','$name','$contact', '$adhar')"; 

     $result=mysqli_query($conn,$query2);
     $_SESSION["name"]=$name;
     $_SESSION["contact"]=$contact;
     $_SESSION["adhar"]=$adhar;
     echo"<script>alert('Your Detail Submitted Succesfully');</script>";
     echo "<script>window.location = 'payment.html';</script>";;
  

   
   
?>