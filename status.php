<?php 
require "./includes/common.php";
if(!$_SESSION['email_id'])
{
    header("location:login.php");
}

?>
<html>
<head>
<style>
.box{
  border: 3px solid #000;
  
}
form{
  width=30px;
  text-align:center;
}
.form-control{
  width:10px;
}
  
</style>  
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="Css/search.css?v=<?php echo time(); ?>"> 
</head>
<body>
<?php
 require './includes/header1.php';
 ?>
<div class="jumbotron">
  <form action="status_valid.php" method="post">
    <label>Filght-id</label>
    <input type="text" width="20px" name="id"><br>
    <button type="submit" class="btn btn-success" style=margin-left:30px;margin-top:16px;>Go</button>
</form>
</div>
</div>
</body>
</html>
