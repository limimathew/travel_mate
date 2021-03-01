
<?php
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
	
	h2{
		margin-left:400px;
		font-size:30px;
	}
	
	table,th,td{
	   margin-left:400px;
	   border:2px solid #000000;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	   background-color:rgba(0,0,0,0.1); 
	   color:white;
	  
   }

  div{
	backgroundcolor:gray;
  }
	body{
		background-image:url("adventure1.jpg");
		background-size:cover;
		
	
  }
  
   
</style>
</head>
<body>
	<a href="admin_page.php" bgcolor="white">back to home</a>
<div >
<form method="get" action="#">
<table class="bi">
<h1>TRAVELMATE</h1>
<h2>View Enquiry</h2>
<thead>
 <tr>
  <th>SL.No</th>
  <th>Name</th>
  <th>Email ID</th>
  <th>Phone No</th>
  <th>Enquiry</th>
 </tr>
</thead>
<tbody>
<?php
$query="select * from enqtb";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['email']."</td>
				<td>".$row['phoneno']."</td>
				<td>".$row['enquiry']."</td>
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
