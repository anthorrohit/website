<?php

$host="localhost";
$uname="root";
$pss="";
$dbname="try";
$conn=mysqli_connect($host,$uname,$pss,$dbname);
if ($conn) {
	# code...
	echo "";
} else {
	# code... 
	die("connection failed because".mysqli_connect_error());
}




?>