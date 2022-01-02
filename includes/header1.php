<?php
 require './includes/common.php';
?>

<div class="navbar">
            <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <div class="awesome"><a class="navbar-brand" href="index.php"><h1 class="animate__animated animate__wobble"><span class="glyphicon glyphicon-plane"></span> GoIndia-Go</h1></a></div>
</div>
          <div class="awesome">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="status.php"><span class="glyphicon glyphicon-check"></span>Flight_Status</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>
            <?php
             echo $_SESSION['fname'];
            ?></a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Login OUt</a></li>
          </ul>
          </div>
            </div>
        </div>
        