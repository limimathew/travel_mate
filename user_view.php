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
   a
   {
	 color:white;  
   }
  div{
	backgroundcolor:gray;
  }
  body{
	background-image: url("g2.jpg");
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
<h3>view Users Details</h3>
<thead>
 <tr>
  <th>Name</th>
  <th>DOB</th>
  <th>Place</th>
  <th>Gender</th>
  <th>Contactno</th>
  <th>Address</th>
  <th>Email</th>
  <th>Approve</th>
  <th>Reject</th>
 </tr>
</thead>
<tbody bgcolor="gray">
<?php
$query="select * from regtb";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['name']."</td>
				<td>".$row['dob']."</td>
				<td>".$row['place']."</td>
				<td>".$row['gender']."</td>
				<td>".$row['phone']."</td>
				<td>".$row['address']."</td>
				<td>".$row['email']."</td>";

				if($row['status']=='1')
				{
				echo "<td>Approved</td>";
				echo "<td><a href='userreject.php?id=".$row['id']."'>Reject</a></td>";	
				}
                else if($row['status']=='2')
                {
                echo "<td>Rejected</td>";
				echo "<td><a href='userapprove.php?id=".$row['id']."'>Approve</a></td>";		
                }
				else
				{
				echo "<td><a href='userapprove.php?id=".$row['id']."'>Approve</a></td>
				      <td><a href='userreject.php?id=".$row['id']."'>Reject</a></td>
			    </tr>";
				}
				
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