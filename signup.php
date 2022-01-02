<?php
             require("./includes/common.php");
?>
<html>
  <head>
   <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="Css/signup.css?v=<?php echo time(); ?>"> 
        <script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value!= document.chngpwd.cpassword.value)
{
alert("Password and Confirm Password do not match  !!");
document.chngpwd.password.focus();
return false;
}
return true;
}
</script>
  </head>
  <body>  
   <?php
   require "./includes/header.php";
   ?>

    <div class="signup-form">
    <form name="chngpwd" action="signup_script.php" method="post" onSubmit="return valid();" >    
      <h2>Sign Up</h2>
      <p>Please fill in this form to create an account!</p>
      <hr>
          <div class="form-group">
        <div class="row">
          <div class="col-xs-6"><input type="text" class="form-control" name="fname" placeholder="First Name" required="required"></div>
          <div class="col-xs-6"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"></div>
        </div>        	
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
      <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
          </div>
      <div class="form-group">
              <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required="required">
          </div>       
          
          <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
      </div>
      <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
          </div>
          </form>
      
    <div class="hint-text">Already have an account? <a href="login.html">Login here</a></div>
  </div>
    
    
  <?php 
       require "./includes/footer.php";
       ?>
      
  </div>
  </body>
</html>