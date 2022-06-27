<?php -->
$host="localhost";
$user="";
$password="";
$db="workshop";
$db=mysqli_connect('localhost','root','','workshop');
if(isset($_POST['adminlogin']))
{
 $user = mysqli_real_escape_string($db,$_POST['uname']);
 $password = mysqli_real_escape_string($db,$_POST['pwd']);
 if(empty($user)){
echo"Username is incorrect";
 }
 if(empty($password)){
 echo "Username is incorrect";
 }
 else{
   md5($password);
   $query = "SELECT * FROM adminlogin WHERE user = '$user' AND password = '$password'";
   $results = mysqli_query($db, $query);
   if(mysqli_num_rows($results)==1){
     $_SESSION['user'] = $user;
       $_SESSION['success'] = "You are successfully logged in";
       header('location: admin.php');
       }
       else{
         array_push($errors, "Wrong username/password");
       }
 }
}
?>

$host = "localhost";
$suser = "root";
$spassword = '';
$db_name = "workshop";

$con = mysqli_connect($host, $suser, $spassword, $db_name);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}
$suser = $_POST['suname'];
$spassword = $_POST['spwd'];

   //to prevent from mysqli injection
   $suser = stripcslashes($suser);
   $spassword = stripcslashes($spassword);
   $suser = mysqli_real_escape_string($con, $suser);
   $spassword = mysqli_real_escape_string($con, $spassword);

   $sql = "select *from studlogin where user = '$suser' and password = '$spassword'";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);

   if($count == 1){
    header("Location:");
   }
   else{
       echo "<p> Login failed. Invalid username or password.</p>";
   }


 ?>
