<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet'type='text/css'href='css/foru.css'/>
</head>
<body>
<img src="images/logo.png" alt="Swapit Logo" class="logo">
<h1>Profiles!!</h1>
<li><a href="html/userpage.html">User Page</a></li>
<?php

$conn=new mysqli("localhost","root","","swapbook");
if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
$check="SELECT *FROM buysellinfo";
if($result=mysqli_query($conn,$check))
{
	while($obj=mysqli_fetch_object($result))
	{

		    $username=$obj->Username;
			$bs=$obj->BuySell;
			$bookname=$obj->BookName;
			$author=$obj->Author;
			$price=$obj->Price;
			echo '<html><body><div class="sellerinfo"><p>User Name:' .$username. '<br></p><p>Buy/Sell:' .$bs. '<br></p><p>Book Name:' .$bookname. '<br></p><p>Author:' .$author. '<br></p><p>Price:' .$price. '</p></div></body></html>';


	}
	//header("Location:userpage.html");

}
else{

	echo "Could not connect";
	echo "outside while";
}
mysqli_close($conn);
?>
</body>
</html>
