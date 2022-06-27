<!DOCTYPE html>
<html >
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['password'])) {
	$user=$_POST['user'];
	$password=$_POST['password'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'workshop') or die("cannot select DB");

	$query=mysqli_query($con,"SELECT * FROM studlogin WHERE user='".$user."' AND password='".$password."'" );
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbusername=$row['user'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $password == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location:studloggedin.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>



  <head>

      <link rel="stylesheet" href="css/styles.css">
    <title></title>
  </head>
  <body style="background-image: url('heybg.jpg');">
    <center>


    <h2 >Hello Student!</h2>
    <p>
    Please enter username and password.
    </p><div style="background-color: grey; height : 300px; width: 700px; padding-top : 100px;">
    <form  action="" method="POST">
      Username:
      <input type="text" name="user"><br /><br />
      Password:
      <input  type="password" name="password"><br /><br /><br /><br />
      <input  type="submit" name="submit" value="Login">
    </form></div>
      </center>
  </body>
</html>
