<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<html>
<head>
	<style>
	body{
	background-image: url("img19.jpg");
	background-size:cover;
	}
	input
	{
		padding:10px;
	}
	.bi
	{
		text-align:center;
		border:2px solid;
		width:300px;
		height:500px;
		margin-left:450px;
		
	}

	</style>
</head>
<body>

	<?php
		$id=$_GET['id'];
		$query="select * from pack_table where pid=$id";
		$result=mysqli_query($mysql,$query);
		$row=mysqli_fetch_assoc($result);
			
	?>
	<div class="bi">
	<form action="update_f.php" method="post">

  <h1>Update Form</h1>
  <input type="hidden" name="pid" value="<?php echo $row['pid'];?>"></br>
  <label>Package type:</label></br>
  <input type="text" name="ptype" value="<?php echo $row['ptype'];?>"></br>
  <label>Destination:</label><br>
  <input type="text" name="destination" value="<?php echo $row['destination'];?>"></br>
   <label >Duration:</label><br>
  <input type="text"  name="duration" value="<?php echo $row['duration'];?>"></br>
  <label>Travel mode:</label><br>
  <input type="text" name="travelmode" value="<?php echo $row['travelmode'];?>"></br></br>
  <label >Cost:</label><br>
  <input type="text" name="cost" value="<?php echo $row['cost'];?>"></br></br>
  
  <input type="submit" value="Update">
  
</form> 
</div>
	
</body>
</html>