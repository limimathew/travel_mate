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
	
	h3{
		text-align:center;
		font-size:25px;
		
		
	}
	h1{
		color:white;
	}
	table,th,td{
		
	   margin-left:350px;
	   border:2px solid #000000;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	   background-color:rgba(0,0,0,0.6);
	   color:white;
	  
   }
   
  div{
	backgroundcolor:gray;
  }
	body{
		
		background-image:url("img29.jpg");
		background-image:cover;
	
  }
   
</style>
</head>
<body>
	<a href="admin_page.php">back to home</a>
<div>
<form method="get" action="#">
<table>
<h1>TRAVELMATE</h1>
<h3>VIEW TSSUES</h3>
<thead>
 <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Contact no</th>
  <th>Emailid</th>
  <th>Issues</th>
  <th>Description</th>
  <th>Action</th>
 </tr>
</thead>
<tbody>
<?php
$query="select * from issue";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['phno']."</td>
				<td>".$row['email']."</td>
				<td>".$row['issue']."</td>
				<td>".$row['description']."</td>
				<td><a href='issuedelete.php?id=".$row['id']."'>Delete</a></td>
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
