<?php 
session_start();
require 'config.php';

if (isset($_POST['pid'])) {
	
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pimage=$_POST['pimage'];
	$pprice=$_POST['pprice'];
	$pcode=$_POST['pcode'];
	$pqty = 1;


	$stmt = $conn->prepare("SELECT dis FROM cart1 WHERE dis=?");
	$stmt->bind_param("s",$pcode);
	$stmt->execute();
	$res = $stmt->get_result();
	$r = $res->fetch_assoc();
	$code =$r['dis'];

	if (!$code) {
		
		$query =$conn->prepare("INSERT INTO cart1 ( product_name, product_image, price, qty, total_price, dis) VALUES (?,?,?,?,?,?)");
		$query->bind_param("sssiss",$pname,$pimage,$pprice,$pqty,$pprice,$pcode);
		$query->execute();

		echo '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Item added to your cart</strong> .
</div>';
	}
	else{
		echo '<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Item already added to your cart</strong> .
</div>';

	}
}


if (isset($_GET['cartItem']) && isset($_GET['cartItem'])=='cartItem') {
 		
 		$stmt = $conn->prepare("SELECT * FROM  cart1");
 		$stmt->execute();
 		$stmt->store_result();
 		$rows = $stmt-> num_row;

 		echo "$rows";

}
if (isset($_GET['remove'])) {
	$id =$_GET['remove'];
	$stmt=$conn-> prepare("DELETE FROM cart1 WHERE id=?");
	$stmt-> bind_param($id);
	$stmt-> execute();

	$_SESSION['showAlert'] ='block';
	$_SESSION['message'] ='item removed from your cart...';
	header('location:cart.php');

}
if (isset($_GET['clear'])) {
	$stmt=$conn-> prepare("DELETE FROM cart1");
	$stmt-> execute();
	$_SESSION['showAlert'] ='block';
	$_SESSION['message'] =' all item removed from your cart...';
	header('location:cart.php');
}
if ((isset($_POST['qty']))) {
	$qty =$_POST['qty'];
	$pid =$_POST['pid'];
	$pprice =$_POST['pprice'];

	$tprice=$qty*$pprice;
		$stmt=$conn-> prepare("UPDATE cart1 SET qty=?,total_price=? WHERE id=?");
	 $stmt-> blind_param("isi",$qty,$tprice,$pid);
	 $stmt-> execute();

}

	






if (isset($_POST['action'])&& isset($_POST['action'])=='order') {
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$products=$_POST['products'];
	$grand_total=$_POST['grand_total'];
	$address=$_POST['address'];

	$data='';

	$stmt = $conn-> prepare("INSERT INTO jds_orders(name, phone, address, grand_total, products) VALUES(?,?,?,?,?)");
	
	$stmt->bind_param("sssss",$name,$phone,$address,$products,$grand_total);
	$stmt-> execute();

	$data ='<div class="text-center col-md-11 col-lg-12 col-sm-4">
	<h1 class="display-4 mt-2 text-danger">Thank you!</h1>
	<h2 class="text-success ">Your order placed successfully!</h2>
	<h4 class="bg-danger text-light rounded p-2">Items purchased: '.$products.'</h4>
	<h2>please visit agian '.$name.'</h2>
	<h2>you will get your products on your address which is <b>'.$address.'</b></h2>
	<h2>You have to pay ₹ '.$grand_total.' to our member who gave you the products</h2>

	</div>';
			echo $data;



}


 ?>