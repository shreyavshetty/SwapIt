<!DOCTYPE html>
<head>
</head>
<body>
<h1>These are the sellers!!</h1>
<li><a href="html/userpage.html">User Page</a></li>
<img src="images/logo.png" alt="Swapit Logo" class="logo">
<?php

echo '<link href="css/foru.css" rel="stylesheet">';

extract($_POST);
$conn=new mysqli("localhost","root","","swapbook");
if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
$bname=$_POST['bookname'];
$aname=$_POST['authorname'];
$check="SELECT *FROM buysellinfo WHERE BookName='" .$bname."'";
if($result=mysqli_query($conn,$check))
{
	while($obj=mysqli_fetch_object($result))
	{
		if($obj->Author == $_POST['authorname'])
		{
		    $username=$obj->Username;
			$price=$obj->Price;
			echo '<html><body><div class="main"><div class="sellerinfo"><p>Seller:</p><p>' .$username. '</p><p>Price:</p><p>' .$price. '</p></div></div></body></html>';


		}

		else
		{
		    echo "Sorry no matches!";

		}
	}
}
else{

	echo "Could not connect";
	echo "outside while";
}
mysqli_close($conn);
?>
</body>
</html>
