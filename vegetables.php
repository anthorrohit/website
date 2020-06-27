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

	<title>just demand solutions</title>
</head>
<body>
	<!-- ----------- -  ---------  --0 -0-OOU	YTGD 6G7TTRDCV IYTFV -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Just demand solutions</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="vegetables.php">vegetables</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fruits.php">Fruits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:22px;">&nbsp;&nbsp;</i><span id="cart-item" class="badage badge-danger"></span>checkout</a>
      </li>
    </ul>
  </div>
</nav>

	
	<div class="container m-8">
		<div id="message"></div>
		<div class="row">
		<?php 
		include 'config.php';
		$stmt = $conn->prepare("SELECT * FROM products");
		$stmt->execute( );
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc()):

		 ?>
		 <div class="col-lg-3 col-sm-6 col-md-4 mb-2">
		 	<div class="card-deck">
		 		<div class="card p-2 border border-dark mb-2">
		 			<img src="images/<?php echo $row["product_image"]; ?>" class="card-img-top" height="250">
		 			<div class="card-body p-1">
		 				<h4 class="card-title text-center text-info" ><?php echo $row['product_name'] ?></h4>
		 				<h3 class="card-text text-center text-danger"><b>₹</b> <?php echo $row['price']?> /kg</h3>
		 				<div class="card-footer p-1">
		 					<form class="form-submit" action="">
		 						<input type="hidden" class="pid" value="<?php echo $row['id'] ?>">
		 						<input type="hidden" class="pname" value="<?php echo $row['product_name'] ?>">
		 						<input type="hidden" class="pimage" value="<?php echo $row['product_image'] ?>">
		 						<input type="hidden" class="pprice" value="<?php echo $row['price'] ?>">
		 						<input type="hidden" class="pcode" value="<?php echo $row['dis'] ?>">
		 						

		 						<button class="btn btn-info btn-block addItemBtn"><i class="fa fa-cart-plus"></i>&nbsp; &nbsp;Add To Cart</button>
		 					</form>

		 					
		 				</div>
		 				
		 			</div>
		 			
		 		</div>
		 		
		 	</div>
		 	
		 </div>

		



<?php endwhile;?>

		</div>
	</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".addItemBtn").click(function(e){
					e.preventDefault();
					var $form =$(this).closest(".form-submit");
					var	pid=$form.find(".pid").val();
					var	pname=$form.find(".pname").val();
					var	pimage=$form.find(".pimage").val();
					var	pprice=$form.find(".pprice").val();
					var	pcode=$form.find(".pcode").val();

					$.ajax({
						url:'action.php',
						type: "POST",
                  
						data:{pid:pid,pname:pname,pimage:pimage,pprice:pprice,pcode:pcode},
						success:function(response){
							$("#message").html(response);
							load_cart_item_number();

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


<style type="text/css">
	
	.container{
		margin-top: 10px !important;
	}

</style>

</body>
</html>