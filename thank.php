<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$products=$_POST['products'];
$grand_total=$_POST['grand_total'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cart_system";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_error() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO jds_orders( name, phone, address, grand_total, products) VALUES ($name,$phone,$address,$grand_total,$products)";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo  "Error- ".$sql."<br>".$conn->error;
}
$conn->close();
}
?>