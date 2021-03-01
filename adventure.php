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
	
	h1{
		text-align:center;
		
	}
	table,th,td{
	   margin-left:30px;
	   border:2px solid #000000;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	  
   }
   form
   {
	   
   }
  div{
	backgroundcolor:gray;
  }
	body{
		background-image:url("mm.jpg");
		background-size:cover;
	
  }
   
</style>
</head>
<body>
	<a href="package_home.php">back to home</a>	
<div>
<form method="get" action="#">
<table>
<h1>Adventure Package</h1>
<h3>view package</h3>
<thead>
 <tr bgcolor="pink">
  <th>package id</th>
  <th>package type</th>
  <th>destination</th>
  <th>duration</th>
  <th>travel mode</th>
  <th>cost</th>
  <th>View</th>
   <th>Booking</th>
 </tr>
</thead>
<tbody bgcolor="white">
<?php
$query="select * from pack_table where ptype='adventure'";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['pid']."</td>
				<td>".$row['ptype']."</td>
				<td>".$row['destination']."</td>
				<td>".$row['duration']."</td>
				<td>".$row['travelmode']."</td>
				<td>".$row['cost']."</td>
				
				<td><a href=viewpackage.php?id=".$row['pid'].">view</a></td>
				<td>
				    <a href='bookingform.php?id=".$row['pid']."'>Booking</a></td>
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