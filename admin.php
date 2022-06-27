<!DOCTYPE html>
<html lang="en" dir="ltr">




  <head>
    <meta charset="utf-8">
    <title>Admin login</title>
      <link rel="stylesheet" href="css/styles.css">
  </head>
  <body style="background-image: url('heybg.jpg');"><center>


<h2>Hello Admin!</h2>
<p>
  Please enter username and password.
</p><div style="background-color: grey; height : 300px; width: 700px; padding-top : 100px;">


  <form class="" action="admin.php" method="post">
    Username:
    <input type="text" name="user"  placeholder="username"><br /><br />
    Password:
    <input type="password" name="password" placeholder="password"><br /><br /><br /><br />
    <button type="submit" name="adminlogin" >Login</button>
  </form><br />
  </div><br />
  <br />  <a href="index.html"><button>Go back to home</button></a>
  <hr />
  <div class="contact">

  Contact us<br /><br />

  <img class="loc" src="loc2.png" alt=""> <br /><br />#208,CRC Block,<br /><br />
  CIT Campus,Tumkur<br /><br />
  Mail us at : nageshkolkar46@gmail.com<br /><br />
  Call us at : 6360940652<br /><br />
   </div>
   <?php
      $host = "localhost";
      $user = "root";
      $password = '';
      $db_name = "workshop";

      $con = mysqli_connect($host, $user, $password, $db_name);
      if(mysqli_connect_errno()) {
          die("Failed to connect with MySQL: ". mysqli_connect_error());
      }
      $user = $_POST['user'];
     $password = $_POST['password'];

         //to prevent from mysqli injection
         $user = stripcslashes($user);
         $password = stripcslashes($password);
         $user = mysqli_real_escape_string($con, $user);
         $password = mysqli_real_escape_string($con, $password);

         $sql = "select *from adminlogin where user = '$user' and password = '$password'";
         $result = mysqli_query($con, $sql);
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
         $count = mysqli_num_rows($result);

         if($count == 1){

           header("Location:adminloggedin.php");

         }
         else{
             echo "<p style='color:red; font-size:20px; '> Login failed. Invalid username or password.</p>";
         }
   ?>
  </center></body>
</html>
