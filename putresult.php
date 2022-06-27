<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Studresult</title>
        <link rel="stylesheet" href="css/styles.css">
  </head>
  <body style="background-image: url('heybg.jpg');"><center>


<h1>Enter student results here</h1>
<form method="post">
  USN :
  <input type="text" name="susn" value=""><br /><br /><br /><br />
  DS :
  <input type="text" name="ds" value=""><br /><br /><br /><br />
  DC :
  <input type="text" name="dc" value=""><br /><br /><br /><br />
  M2 :
  <input type="text" name="m2" value=""><br /><br /><br /><br />
  <button type="submit" name="adminlogin" >Upload</button>

</form><br /><br /><br /><br /><br />
<a href="index.html"><button>Go back to home</button></a>
  </center></body>
<br />
</html>
<?php

$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'workshop') or die(mysqli_error($dbh));


        $sUSN = $_REQUEST['susn'];
        $DS= $_REQUEST['ds'];
        $DC = $_REQUEST['dc'];
        $M2 = $_REQUEST['m2'];


  $query= "insert into studresult values('$sUSN','$DS','$DC','$M2')";
  $result= mysqli_query($dbh,$query) or die(mysqli_error($dbh));
  echo"Data inserted successfully" ;
?>
