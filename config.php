<?php 
$conn= new mysqli("localhost","root","","cart_system");
if ($conn->connect_error) {
	 die("f.$conn->connect_error");
}
 ?>