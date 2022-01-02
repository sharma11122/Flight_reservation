<?php 
require "./includes/common.php";
if(!$_SESSION['email_id'])
{
    header("location:login.php");
}

?>
<?php 
	$f_id = isset($_GET['f_id'])?$_GET['f_id']:"";
	$sql="SELECT * FROM schedule WHERE f_id = $f_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
									$f_id   = $row["f_id"];
									$_SESSION["f_id"]=$f_id;
									$f_name 	= $row["f_name"];
									$_SESSION["f_name"]=$f_name;
									$f_from 	= $row["f_from"];
									$_SESSION["f_from"]=$f_from;
									$f_to 	= $row["f_to"];
									$_SESSION["f_to"]=$f_to;
									$departure 	= $row["departure"];
									$_SESSION["departure"]=$departure;
									$arrival = $row["arrival"];
									$_SESSION["arrival"]=$arrival;
									$price = $row["price"];
									

							    }
							}
							$conn->close();
	
 ?>
 <html>
    <head>
        <title>
            Fight Reservation
        </title>
		
		
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  	<link rel="stylesheet" href="Css/search.css?v=<?php echo time(); ?>"> 
    <script type="text/javascript">
     function msg(){
       alert("Please ,Enter Your DEtails");
     }
     </script>
    </head>
    <body>
       <?php
	   require "./includes/header1.php";
	   ?>
       <div class="container">
	   <table class="table">
    <thead>
      <tr>
        <th>Flight-id</th>
        <th>Flight Name</th>
		<th>Flight From</th>
		<th>Flight To</th>
		<th>Flight Arrival</th>
		<th>Flight Departure</th>
		<th>Price</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $f_id; ?></td>
        <td><?php echo $f_name; ?></td>
		<td><?php echo $f_from; ?></td>
		<td><?php echo $f_to; ?></td>
		<td><?php echo $arrival; ?></td>
		<td><?php echo $departure; ?></td>
		<td><?php echo $price; ?></td>

		
      </tr>      
	</tbody>
	</table>
	<button class="btn btn-danger"><a href="search.php">Back </a></button>
	<button class="btn btn-success"><a href="seat.php">Book Seat </a></button>
	  </div>
          <?php
			require './includes/footer.php';
		?>
    </body>
</html>




