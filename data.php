<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "data";

//Creating database connection

$conn = mysqli_connect($servername, $username, $password, $database);

// check connection

if (!$conn)
{
	die("failed to connect".mysqli_connect_error());
}
else
{
	echo "connection successful";
}

$sql = "insert into data(sno,name,salary)values(5,'aarav',50000)";

if(mysqli_query($conn, $sql))
{
	echo "success";

}
else
 {
 	echo "error". mysqli_error($conn);

}

mysqli_close($conn);

?>