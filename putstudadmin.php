<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">

  </head>
  <body style="background-image: url('heybg.jpg');" >
    <center>

    <h2>
        Enter the student details below
      </h2>
  <form action="putstudadmin.php" method="post">

    Name:
    <input type="text" name="nm" placeholder="Your Name"><br /><br /><br />
    USN:
    <input type="text" name="us" placeholder="Your USN"><br /><br /><br />
  Mail:
    <input type="text" name ="ml" placeholder="Your Mail"><br /><br /><br />
    Department:
    <input type="text" name="dept" placeholder="Your Dept"><br /><br /><br />
<button href="thank.html" type="submit" name="submit" >Upload</button><br />

  </form>
  <br />
  <a href="index.html"><button>Go back to home</button></a><br /><br />
  <div class="contact">

  Contact us<br /><br />
  <img class="loc" src="loc2.png" alt=""> #208,CRC Block,<br />
  CIT Campus,Tumkur<br /><br />
  Mail us at : nageshkolkar46@gmail.com<br /><br />
  Call us at : 6360940652<br /><br />
   </div>
 </center></body>
</html>
<?php

$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'workshop') or die(mysqli_error($dbh));


        $Name = $_REQUEST['nm'];
        $USN = $_REQUEST['us'];
        $Mail = $_REQUEST['ml'];
        $Department = $_REQUEST['dept'];



  $query= "insert into putstudadmin values('$Name','$USN','$Mail','$Department')";
  $result= mysqli_query($dbh,$query) or die(mysqli_error($dbh));
  echo" Uploaded successfully";

?>
