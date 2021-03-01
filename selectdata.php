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
	   color:white;
	   font-size: 20px;
	  
   }
   form
   {
	   
   }
  div{
	backgroundcolor:gray;
  }
	body{
		background-image:url("mt.jpg");
		background-size:cover;
	
  }
   
</style>
</head>
<body>
<a href="admin_page.php">back to home</a>
<div>
<form method="get" action="#">
<table>
<h1>travelmate</h1>
<h3>view package</h3>
<thead>
 <tr>
  <th bgcolor="black">package id</th>
  <th bgcolor="green">package type</th>
  <th bgcolor="black">destination</th>
  <th bgcolor="green">duration</th>
  <th bgcolor="black">travel mode</th>
  <th bgcolor="green">cost</th>
  <th bgcolor="black">Action</th>
 </tr>
</thead>
<tbody bgcolor="gray">
<?php
$query="select * from pack_table";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr >
				<td >".$row['pid']."</td>
				<td>".$row['ptype']."</td>
				<td>".$row['destination']."</td>
				<td>".$row['duration']."</td>
				<td>".$row['travelmode']."</td>
				<td>".$row['cost']."</td>
				
				<td><a href=update_form.php?id=".$row['pid'].">Update</a>/
				    <a href='pack_delete.php?id=".$row['pid']."'>Delete</a></td>
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