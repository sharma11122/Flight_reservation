
  <?php
       require("./includes/common.php");
       
?>

<html>
  <head>
   <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="Css/login.css?v=<?php echo time(); ?>"> 
        <script src="Css/JavaScript/login.js"></script>
  </head>
  <body>
     
  <?php
       require "./includes/header.php";
       ?>
      <br><br><br>
      <div class="container">
        <div class="left">
          <div class="one"><a class="navbar-brand" href=""><h1 class="animate__animated animate__wobble"><span class="glyphicon glyphicon-plane"></span><u> GoIndia-Go</u></h1></a></div>

          <div class="login"><u>Login</u></div>
        </div>
        <div class="right">
          <svg viewBox="0 0 320 300">
            <defs>
              <linearGradient
                              inkscape:collect="always"
                              id="linearGradient"
                              x1="13"
                              y1="193.49992"
                              x2="307"
                              y2="193.49992"
                              gradientUnits="userSpaceOnUse">
                <stop
                      style="stop-color:#ff00ff;"
                      offset="0"
                      id="stop876" />
                <stop
                      style="stop-color:#ff0000;"
                      offset="1"
                      id="stop878" />
              </linearGradient>
            </defs>
            <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
          </svg>
          <form action="login_valid.php" method="post">
          <div class="form">
            <label for="UserName">UserName</label>
            <input type="text" id="username" name="username" required=required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required=required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required=required>
             <input type="submit" id="submit" value="Submit">
          </div>
           <div class="message">
             <?php
              if(isset($_SESSION["error"])){
                $error=$_SESSION["error"];
                echo "<h4>$error</h4>";
                
              }

            ?>
          </div>
    
          </form>
        </div>
      </div>
    </div>


     
    
    <?php
       require "./includes/footer.php";
       unset($_SESSION["error"]);
       ?>
      
    
  </body>
</html>
