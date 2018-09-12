<html>
<head>
<title>Veiw all books to be sold</title>
<link rel='stylesheet'type='text/css'href='css/foru.css'/>
<style>

</style>
</head>
</html>


<?php
extract($_POST);
$username=$_POST['username'];
$bookname=$_POST['bookname'];
$author=$_POST['author'];
$price=$_POST['price'];
$conn=new mysqli("localhost","root","","swapbook");
if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
$sql="INSERT INTO buysellinfo VALUES('$username','sell','$bookname','$author','$price')";
if(mysqli_query($conn,$sql))
{

}

else{
	echo "Error" .$sql. "<br>" ,mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<body>
<h1>Books to be Sold!!!</h1></br>
<li><a href="html/userpage.html">User Page</a></li>
</br>
<img src="images/logo.png" alt="Swapit Logo" class="logo">
<?php
$conn=new mysqli("localhost","root","","swapbook");
if($conn->connect_error)
{
	die("Connection Failed:".$conn->connect_error);
}
$sql="SELECT Username,BookName,Author,Price FROM buysellinfo";
 $result = $conn->query($sql);
  if($result->num_rows>0)
  {
	  while($row=$result->fetch_assoc())
	  {  echo "<div>";
		 echo "UserName:".$row["Username"]."</br>";
		 echo "BookName:".$row["BookName"]."</br>";
		 echo "Author:".$row["Author"]."</br>";
		 echo "Price:".$row["Price"]."</br>";
		 echo "</div></br></br>";

	  }
  }

  $conn->close();
?>

</body>
</html>
