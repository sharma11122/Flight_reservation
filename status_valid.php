<?php
require './includes/common.php';
$id=mysqli_real_escape_string($conn,$_POST['id']);
$sql="Select status FROM schedule where f_id='$id'";
$result=mysqli_query($conn,$sql);

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
  h1{
      text-shadow:2px 2px red;
  }
</style>
</head>
<body>
<div class="jumbotron">
   <h1> <?php
    while($row=mysqli_fetch_array($result)){
        echo $row['status'];
    }

?>
</h1>
</div>
<button type="button" class="btn btn-success"><a href="status.php">Back</a></button>
</body>
</html>
