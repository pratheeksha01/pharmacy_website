<?php
include 'connect.php';
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $con= mysqli_connect("localhost", "root", "","project1") or  die(mysqli_error($con));
 $email=$_POST['email'];
 $password=$_POST['password'];
 $query_registration="select * from  user where email='$email' and password='$password' "or die($query_registration);
 $user_submit=mysqli_query($con,$query_registration);
 $res=mysqli_num_rows($user_submit);
 if($res==0)
 	echo "incorrect email or password";
 else
 {
 	session_start();
 	$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header("Location: shop.php");
 }
 } ?>