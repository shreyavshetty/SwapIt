<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<link rel='stylesheet'type='text/css'href='css/signu.css'/>

<style>

</style>
</head>
<body>
<img src="images/logo.png" alt="Swapit Logo" class="logo">
<div class="divleft">
<h1>Sign Up!!!</h1>
<h4>It's free and always will be</h4>
Connect with the friends <br>and the world around you on SwapIt
</div>

<div class="textdesign">
<form action="php/signin.php"  method="post">
<legend><h3>Personal Information</h3></legend>
First Name:<br><br>
<input type="text" name="firstname" placeholder="FirstName"></br><br>
Last Name:<br><br>
<input type="text" name="lastname" placeholder="LastName"></br><br>
Age:<br><br>
<input type="text" name="age" placeholder="Age"></br><br>
<br<br>
<legend><h3>Contact Details</h3></legend>
Mobile No:<br><br>
<input type="text" name="mobileno" placeholder="Mobile No"></br></br>
Email Id:<br><br>
<input type="text" name="emailid" placeholder="EmailId"></br></br>
<legend><h3>Account Details</h3></legend>
Username:<br><br>
<input type="text" name="username" placeholder="Username"></br><br>
Password:<br><br>
<input class="button" type="password" placeholder="password" name="password"></br><br>
<input type="checkbox" name="valid" value="Condition" checked> I agree to all terms and conditions<br>
<br><input class="button"type="submit" value="Submit"><span>
</form>
</div>
</body>
</html>
