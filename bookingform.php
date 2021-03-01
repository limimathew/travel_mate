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
		background-image:url("cpl.jpg");
		background-size: cover;
		
	}
	
  </style>
</head>
<body class="img">
    
	<form method="post" action="book_insert.php">
		<h1>Booking Form</h1>
	    <label class="studl">Name:</label></br>
        <input class="stud" type="text" name="name" placeholder="Enter Name"></br>	
		
		 <label class="studl">Contactno:</label></br>
        <input class="stud" type="text" name="contact" ></br>	
		
		 <label class="studl"> Emailid:</label></br>
		<input class="stud"type="email" name="email" placeholder="Enter Email"></br>
		 
		 <label class="studl"> From:</label></br>
		<input class="stud" list="from" name="froms" placeholder="select" ></br>
		<datalist id="from">
		<option value="kollam">
		<option value="trivandrum">
		<option value="pathanamthitta">
		<option value="ernakulam">
		<option value="edukki">
		</datalist>
       
		<label class="studl"> TO:</label></br>
		<input class="stud" list="to" name="tos" placeholder="select" ></br>
		<datalist id="to">
		<option value="Goa">
		<option value="Ooty">
		<option value="Vayanad">
		<option value="Banglore">
		<option value="myzoor">
		</datalist>
		
		<input class= "sub" type="submit" value="Submit">
	</form>
	
		
</body>
</html>
