<?php
 $con=mysqli_connect('localhost','root','','test');
if(isset($_POST['sb']))
{
	$email=$_POST['em'];
	$query="INSERT INTO register(email) VALUES('$email')";
	$run=mysqli_query($con,$query);
	echo "Email Register Succesfully...";
}
?>