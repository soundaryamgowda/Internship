<?php
include"conn.php";

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=password_hash($password, PASSWORD_BCRYPT);
$branch=$_POST['branch'];

$query="INSERT INTO `users`(`name`,`email`,`password`,`branch`)VALUES('$name','$email','$password','$branch')";
$result=mysqli_query($con,$query);

if($result){
	echo "successfully inserted";

}
else
{
	echo"failed to insert";

}
?>