<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><center>
    <meta charset="utf-8">
    <title>stud Dashboard</title>
        <link rel="stylesheet" href="css/styles.css">
  </head>
  <body style="background-image: url('heybg.jpg');">
<h1>Hello Student,Welcome!</h1>
 </body>
  <?php
  $dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
  mysqli_select_db($dbh,'workshop') or die(mysqli_error($dbh));

   $var=mysqli_query($dbh,"select *from result");

   echo"<table border size=1 cell-spacing = 10px>";
   echo"<tr><th>Name</th> <th>USN</th> <th>DS</th><th>DC</th><th>M2</th></tr>";

   while ($arr=mysqli_fetch_row($var))
   {
    /* echo "<tr>";
    echo "<td>" . $arr[0] . "</td>";
  echo "<td>" . $arr[1] . "</td>";

  echo "<td>" . $arr[2] . "</td>";

  echo "<td>" . $arr[3] . "</td>";

  echo "<td>" . $arr[4] . "</td>";

  echo "</tr>";*/
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
   }
   echo"</table>";
    ?>
  </center>
</html>
