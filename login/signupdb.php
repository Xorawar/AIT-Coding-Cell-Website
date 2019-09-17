<?php

 
$DB_HOST = "localhost";

$DB_NAME = "active_users";

$DB_USER = "root";

$DB_PASSWORD = "";


$con=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);


if(isset($_POST['signup']))

{

    $username = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);
        
    $sqll = "select * from user_table where name='$username'";
    $result = mysqli_query($con,$sqll);
    
    $rowcount = mysqli_num_rows($result);
    echo($rowcount);
    
    if(mysqli_num_rows($result) > 0){

	   echo"<script type='text/javascript'> alert('Sorry!! Username already exists.');</script>";
    }
    else
    {
       $sql = "Insert into user_table(name,email,password) values('$username','$email','$password')";
        if( mysqli_query($con , $sql)){
                echo("RECORD INSERTED...!!!!");
        }
        else
        {
	           echo("ERROR....!!!");
        }

    }

mysqli_close($con);

}



?>
