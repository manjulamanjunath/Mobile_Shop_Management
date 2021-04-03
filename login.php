<?php


$username=$_POST['username'];
$password=$_POST['password'];


$connection = mysqli_connect('localhost','root','');
if(!$connection)
{
	die("database connection failed".mysqli_error($connection));
}
$select_db=mysqli_select_db($connection,'newdb');
if(!$select_db)
{
	die("database selection failed".mysqli_error($connection));
}

$query="SELECT  username,password FROM userlogin WHERE username='$username' and password='$password'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo "Login successful";
		exit(header("refresh:0;url=http://localhost/mydb/the/home.html"));
	}
	else
		echo "Invalid login";
?>
