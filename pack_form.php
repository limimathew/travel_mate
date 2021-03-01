<!DOCTYPE html>
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
<title>form site</title>
  <style>
  form{
		border:2px solid white;
		width:500px;
		height:900px;
		color:white;
	}
	h1{
		text-decoration:underline;
		text-align:center;
	}
	.studl{
		font-size:20px;
		margin-left:20px;
	}
    .stud{
	      padding :15px;
		  margin:10px;
		  margin-left:100px;
		  
	     }
	.sub{
		border:1px solid;
		width:100px;
		height:50px;
		border-radius:5px;
		text-align:center;
		margin-left:120px;
		margin-top:30px;
		font-size:20px;
	}
	.img{
		background-image:url("leaf.gif");
		background-size:cover;
	}
	
  </style>
</head>
<body class="img">
    
	<form method="post" action="insert_pack.php">
		<h1>create package</h1>
	
	    <label class="studl">Package Type:</label></br>
        <input class="stud" list="package" name="ptype" placeholder="--select--"></br>
        <datalist id="package">
        <option value="family">
        <option value="adventure">
        <option value="couple">
        
		</datalist>
		
		 <label class="studl">Destination:</label></br>
        <input class="stud" type="text" name="destination" ></br>	
		
		 <label class="studl">Duration:</label></br>
        <input class="stud" type="text" name="duration" ></br>	
		
		
		 
		 <label class="studl"> Travel Mode:</label></br>
		<input class="stud" name="travelmode" ></br>
       
		<label class="studl"> Cost:</label></br>
		<input type="text" class="stud" name="cost"></br>
		
		
		
		<input class= "sub" type="submit" value="Submit">
	</form>
	
		
</body>
</html>