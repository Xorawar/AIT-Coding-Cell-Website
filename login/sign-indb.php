<?php

 
$DB_HOST = "localhost";

$DB_NAME = "active_users";

$DB_USER = "root";

$DB_PASSWORD = "";


$con=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);


if(isset($_POST['signin']))

{





$username = mysqli_real_escape_string($con,$_POST['your_name']);
$password = mysqli_real_escape_string($con,$_POST['your_pass']);

$sql = "select * from user_table where name='$username'";



$result = mysqli_query($con,$sql);




if(mysqli_num_rows($result) > 0){


	$row = mysqli_fetch_assoc($result);
	if($password == $row['password']){

		echo("SUCCESS...!!!!");

	}
	else
	{
		echo("Password failure....!!!");
	}
	


}
else
{
	echo("Database Not Found....!!!");
}



	

mysqli_close($con);

}



?>
