<?php 

require 'config.php';

$grand_total=0;
$allItems='';
$items=array();

$sql="SELECT CONCAT(product_name,'(',qty,')') AS ItemQty, total_price FROM cart1";
$stmt=$conn-> prepare($sql);
$stmt-> execute();
$result = $stmt-> get_result();
while($row=$result-> fetch_assoc()){
$grand_total+=$row['total_price'];
$items[]=$row['ItemQty'];

}
$allItems= implode(",", $items);



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 	<title>checkout</title>
 </head>
 <body>
 	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.html">Just demand solutions</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="vegetables.php">vegetables</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fruits.php">Fruits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:22px;">&nbsp;&nbsp;</i><span id="cart-item" class="badage badge-danger"></span>checkout</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6 px-4 pb-4" id="order">
			<h4 class="text-center text-info p-2">Complete your order!</h4>
			<div class="jumbotron p-3 mb2 text-center">
				<h6><b>Products(s):</b><?= $allItems;  ?></h6>
				<h6 class="lead"><b>Delivery charges:</b>Free</h6>
				<h6><b>Amount Payable:</b>  ₹ <?=number_format($grand_total,2)  ?>/-</h6>


			</div>

			<form action="" method="POST" id="placeOrder">
				<input type="hidden" name="products" value="<?= $allItems; ?>">
				<input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
				<div class="form-group">
				<input type="text" name="name" class="form-control " placeholder="Enter name " required></div><div class="form-group">
				
				<input type="phone" name="phone" class="form-control " placeholder="Enter whatsapp number" required></div><div class="form-group">
				<textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter your Delivery address"></textarea>
</div>			
					
					<div class="form-group">
				<input type="submit" name="submit" value="place Order" class="btn btn-danger btn-block btn-submit"></div>

				
			</form>
			
		</div>
	</div>
	
</div>


<script type="text/javascript">
	
	$(document).ready(function(){
$("#placeOrder").submit(function (e) {
	
	e.preventDefault();
	$.ajax({
		url:'action.php',
		method:'POST',
		data:$('form').serialize()+"&action=order",

		success:function(response){
			$("#order").html(response);
		}
	});
});

				

				load_cart_item_number();

				function load_cart_item_number() {
					$.ajax({
						url:'action.php',
						method:'get',
						data:{cartItem:"cart_item"},
						success:function(response){
							$("#card-item").html(response);
						}


					});
				}
			});
			
</script>


 
 </body>
 </html>





