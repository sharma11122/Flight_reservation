<?php 
require "./includes/common.php";
if(!$_SESSION['email_id'])
{
    header("location:login.php");
}
$sql="SELECT id FROM user where email='" . $_SESSION["email_id"] . "'";
$id = 
$result = mysqli_query($conn,$sql);
?>
<html>
	<head>
 <title>Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="Css/book.css?v=<?php echo time(); ?>"> 
	</head>
	<body>
	<?php 
	        require './includes/header1.php';
			while($row = mysqli_fetch_array($result)) {

?>
<div class="main">
<div class="container">
<table class="table"><tr><td style="visibility:hidden"><?php echo $row["id"]; ?></td></tr><table>
  <?php } ?>
    
			<table class="table">
			<tr class="black">
				<td>Flight Id</td>
				<td>Flight Name</td>
				<td>From</td>
				<td>To</td>
				<td>Departure</td>
				<td>Duration</td>
				<td>Arrival</td>
				<td>Price</td>
				<td>Action</td>
			</tr>
<?php
				if(isset($_POST['submit']))
				{   
					$from= $_POST["from"];
					$to= $_POST["to"];
					$departure=$_POST["date"];
					$_SESSION["date"]=$departure;
					$query=" SELECT * FROM schedule WHERE f_from='$from' && f_to='$to' ORDER BY departure ASC";
					$query_run = mysqli_query($conn,$query);
					if(mysqli_num_rows($query_run) <= 0)
					{
						echo"<script>alert('No Result Found Try Again....')</script>";
						echo"<script>location.replace('search.php');</script>";
					}else{
					while ($row = mysqli_fetch_array($query_run)){
	     ?> 
					<tr class="danger">
					      
		                   <td class="two"><?php echo $row['f_id']; ?></td>
							<td class="two"><?php echo $row['f_name']; ?></td>

							<td class="two"><?php echo $row['f_from']; ?></td>

							<td class="two"><?php echo $row['f_to']; ?></td>
				
							<td class="two"><?php echo $row['departure']; ?></td>
							<td class="two">2:30 hrs</td>
							<td class="two"><?php echo $row['arrival']; ?></td>
							<td class="two"><?php echo $row['price']; ?></td>
							<td class="two"><a href="book.php?f_id=<?php echo $row["f_id"];?>"><button type="button">BOOK</a></td>
		             				
					</tr>
					<?php
					}
					
					}
				}
			?>
			
			
       </table>
</div>
</div>
     <?php
	 require './includes/footer.php';
	 ?>
    </body>
</html>