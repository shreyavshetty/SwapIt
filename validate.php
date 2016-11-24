<!DOCTYPE html>
<head>

<link rel='stylesheet'type='text/css'href='validat.css'/>
</head>
<body>
<img src="logo.png" alt="Swapit Logo" class="logo">
<h3>Try Signing Up Again!!</h3>
<li><a href="signup.php">Sign Up!!</a></li>

<?php
extract($_POST);


$conn=new mysqli("localhost","root","","swapbook");
if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
$check="SELECT *FROM signup WHERE user_name='" .$_POST['username'] ."'";
if($result=mysqli_query($conn,$check))
{
	while($obj=mysqli_fetch_object($result))
	{
		if($obj->password == $_POST['psw'])
		{
			header("Location:userpage.html");
			break;
		}
	
		else
		{
		}
	}
}
else{
	
	echo "<h1>Invalid username or password!!</h1></br>";
	echo "<h3>Try Signing Up</h3>";
	
	echo '<li><a href="signup.php">Sign Up!!</a></li>';
}
mysqli_close($conn);
?>
</body>
</html>
