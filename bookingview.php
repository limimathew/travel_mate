<?php
session_start();
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	
	h3{
		text-align:center;
		font-size:30px;
		
		
	}
	table,th,td{
	   margin-top:50px;
	   margin-left:350px;
	   border:2px solid #000000;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	   background-color:rgba(0,0,0,0.4);
	   color:white;
	  
   }
   
  div{
	backgroundcolor:gray;
  }
	body{
		background-image:url("img22.jpg");
		background-size:cover;
	
  }
  .clr{
	  margin-right:300px;
  }
   
</style>
</head>
<body>
<div>
<form method="get" action="#">
<table class="clr">
<h1>TRAVELMATE</h1>
<h3>VIEW BOOKING DETAILS</h3>
<thead>
 <tr>
  <th>Booking id</th>
  <th>Name</th>
  <th>Contact no</th>
  <th>Emailid</th>
  <th>From</th>
  <th>To</th>
  <th>Action</th>
 </tr>
</thead>
<tbody>
<?php
$id=$_SESSION['id'];
$query="select * from booking  where login_id=$id";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['bid']."</td>
				<td>".$row['name']."</td>
				<td>".$row['contact']."</td>
				<td>".$row['email']."</td>
				<td>".$row['froms']."</td>
				<td>".$row['tos']."</td>
				
				
				<td><a href='bookingdelete.php?id=".$row['bid']."'>Delete</a></td>
			  </tr>";
	}
}
else
{
	echo "no result";
}
mysqli_close($mysql);
?>
</tbody>
</table>
<form>
</div>
</body>
</html>
