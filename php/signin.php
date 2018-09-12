<html>
<head>
<title>Sign in</title>
<link rel='stylesheet'type='text/css'href='css/sign.css'/>
</head>
<body>
</body>
</html>
<?php

extract($_POST);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
$mobileno=$_POST['mobileno'];
$emailid=$_POST['emailid'];
$username=$_POST['username'];
$password=$_POST['password'];
$conn=new mysqli("localhost","root","","swapbook");
if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
$sql="INSERT INTO signup VALUES('$firstname','$lastname','$age','$mobileno','$emailid','$username','$password')";
if(mysqli_query($conn,$sql)){

}

else{
	echo "Error" .$sql. "<br>" ,mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<body>
<div id="heading">
<h1>Sign In!!!</h1>
</div>
<img src="images/logo.png" alt="Swapit Logo" class="logo">
<div class="textde">
<form action="validate.php" method="post">
UserName:<br><br><input type="text" name="username" placeholder="Username" ><br><br><br>
PassWord:<br><br><input type="password" placeholder="Password" name="psw"><br><br><br>
<input class="button"type="submit" value="Submit">
</form>
</div>
</body>
</html>
