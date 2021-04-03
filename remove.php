<?php


$M_id=$_POST['M_id'];

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

$query="DELETE FROM Mobile_Stock WHERE M_id='$M_id' ";
if($connection->query($query) === true)
{
 	echo " deleted Successfully ";
}
else
{
	echo "error deleting record:" .$connection->error;
}
$connection->close();
?>
