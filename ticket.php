<?php 
require "./includes/common.php";
if(!$_SESSION['email_id'])
{
    header("location:login.php");
}

?>
 <html>
    <head>
        <title>
            Fight Reservation
        </title>
		
		
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  	<link rel="stylesheet" href="Css/book.css?v=<?php echo time(); ?>"> 
     <style>
        h1{
            text-shadow:2px 2px purple;
            text-align:center;
		}
		body{
			background-color:"#25274d";
		}
      </style>   
    </head>
    <body>
        <h1>GOIndia-Go</h1>
       <div class="container">
	   <table border="1" align="center" height="30%" width="10%" class="table1">
		   <tr>
				<td colspan="2" class="td"><h2>Your Ticket</h2></td>
           </tr>
           <tr class="two"> 
				<td class="three">Name</td>
				<td class="four"><?php echo $_SESSION["fname"]; ?></td>
		   </tr>
            
           <tr class="two"> 
				<td class="three">Email</td>
				<td class="four"><?php echo $_SESSION["email_id"]; ?></td>
           </tr>
           
           <tr class="two"> 
				<td class="three">Contact</td>
				<td class="four"><?php echo $_SESSION["contact"]; ?></td>
           </tr>
           
           <tr class="two"> 
				<td class="three">Adhar No</td>
				<td class="four"><?php echo $_SESSION["adhar"]; ?></td>
		   </tr>
		   <tr class="two"> 
				<td class="three">Flight Id</td>
				<td class="four"><?php echo $_SESSION["f_id"]; ?></td>
		   </tr>
		   <tr class="two">
				<td class="three">Flight Name</td>
				<td class="four"><?php echo $_SESSION["f_name"]?></td>
		   </tr>
		   <tr class="two">
				<td class="three">Flight From</td>
				<td class="four"><?php echo $_SESSION["f_from"]; ?></td>
		   </tr>
		   <tr class="two">
				<td class="three">Flight To</td>
				<td class="four"><?php echo $_SESSION["f_to"]; ?></td>
           </tr>
           
           <tr class="two"> 
				<td class="three">Journey Date</td>
				<td class="four"><?php echo $_SESSION["date"]; ?></td>
		   </tr>
		   <tr class="two">
				<td class="three">Flight Departure</td>
				<td class="four"><?php echo $_SESSION["departure"]; ?></td>
		   </tr>
		   <tr class="two">
				<td class="three">Flight Arrival</td>
				<td class="four"><?php echo $_SESSION["arrival"]; ?></td>
           </tr>
           <tr class="two">
				<td class="three">Seat No</td>
				<td class="four"><?php echo $_SESSION["seat_no"]; ?></td>
		   </tr>
		   <tr>
				<td colspan="2"  class="td"><h2><a href="#"><button class="btn btn-danger" style="font-size:20px ; width:200px;" onclick="window.print()">Print</button></a></h2></td>
		   </tr>
     </table>
</div>
          
    </body>
</html>




