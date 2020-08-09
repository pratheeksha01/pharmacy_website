<?php
include 'connect.php';
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $con= mysqli_connect("localhost", "root", "","project1") or  die(mysqli_error($con));
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $phone=$_POST['phone'];
$query_registration="insert into user(name,email,password,phone) values('$name','$email','$password','$phone')" or(mysqli_error(query_registration));
$user_submit=mysqli_query($con,$query_registration);
echo "user successfully inserted";
$_SESSION['email']=$email;

header("Location: shop.php");

} ?>