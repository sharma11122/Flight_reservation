<html>
    <head>
        <title>
            Fight Reservation
        </title>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="Css/search.css?v=<?php echo time(); ?>"> 
        
    </head>
    <body>
        <?php 
         require './includes/header1.php';
         ?>
        <div class="Image">
        <div class="dark fire">
		    <h1 class="Blazing" contenteditable="true" style="padding-left:210px;"></h1>
	</div>
        <div class="booking-form">
          <div class="radio-button">
            <input type="radio" class="btn" name="check" checked="checked"><span>Roundtrip</span>
            <input type="radio" class="btn" name="check"><span>One City</span>
            <input type="radio" class="btn" name="check"><span>Multi-City</span>
          </div>
        
        <form action="search_valid.php" method="post">
        <div class="book-form">
          <label>Flying From</label>
          <!--<input type="text" class="form-control" name="Flying-from" placeholder="City or airport">-->
		  <select required name="from" class="form-control">
								<option value="">Journey From</option>
								<option value="pune">Pune</option>
								<option value="Aurangabad">Aurangabad</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Delhi">New Delhi</option>
								<option value="Hyderabad">Hyderabad</option>
								<option value="Bengaluru">Bengaluru</option>
								<option value="goa">goa</option>
							</select>
          <label>Flying To</label>
		  <select required name="to" class="form-control">
								<option value="">Select destination</option>
								<option value="pune">Pune</option>
								<option value="Aurangabad">Aurangabad</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Delhi">New Delhi</option>
								<option value="Hyderabad">Hyderabad</option>
								<option value="Bengaluru">Bengaluru</option>
								<option value="goa">goa</option>
							</select>
          <!--<input type="text" class="form-control" name="Flying-to" placeholder="City or airport">-->
        
        <div class="input-grp">
         <label>Departing</label>
         <input type="date" name="date" class="form-control select-date">
        </div>

        
        <div class="input-grp">
          <label>Returning</label>
          <input type="date" class="form-control select-date">
         </div>

         
        <div class="input-grp">
          <label>Adult</label>
          <input type="number" class="form-control" value="1">
         </div>

         <div class="input-grp">
          <label>Children</label>
          <input type="number" class="form-control" value="0">
         </div>

         <div class="input-grp">
          <label>Travel Class</label>
          <select class="custom-select">
               <option value="1">Economy Class</option>
               <option value="2">Business Class</option>
        </select>
         </div>

         <div class="input-grp">
           <input type="submit" name="submit" value="Show Flight" class="btn btn-primary flight">
         </div>

        </div>
        
        </form>
        </div>
        
       
        <?php
        require "./includes/footer.php";
        ?>
        
      
        
</body>
</html>