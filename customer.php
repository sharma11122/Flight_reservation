<?php
  require './includes/common.php';

?>

<html>
<head>
<title>Detail</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="Css/customer.css?v=<?php echo time(); ?>"> 

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<h1 style="text-shadow:2px 2px red;font-size:50px;text-align:center">GoIndia-Go</h1>
<form action="customer_valid.php" method="post">
  <h1 style="color:black;margin-top:-3rem;">Customer Detail</h1>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="text" class="input" name="email" placeholder="<?php echo $_SESSION["email_id"] ?>">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" class="input" name="name" required=required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR IDENTITY NO </p>
    <input type="text" class="input" name="aadhar" required=required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR CONTACT NO</p>
    <input type="text" class="input" name="contact" required=required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 
  <button type="submit">submit</button>
</form>
</body>
</head>    