<?php 

session_start();
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


	<title>just demand solutions</title>
</head>
<body>
	<!-- ----------- -  ---------  --0 -0-OOU	YTGD 6G7TTRDCV IYTFV -->
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
<!-- ----------    - - - ----------- --- - - - - - - - - - - - - - - - -  --  - - -- - - - - - ---  -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10 col-sm-4 col-md-3">
      <div style="display: <?php if (isset($_SESSION['showAlert'])) {echo $_SESSION['showAlert'];}else{echo'none';}unset($_SESSION['showAlert']);?>" class="alert alert-success alert-dismissible mt-3">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?php if (isset($_SESSION['message'])) {echo $_SESSION['message'];}unset($_SESSION['showAlert']); ?></strong> .
</div>

      <div class="table-responsive mt-2">
        <table class="table table-bordered table-striped text-center">
      <thead>
            <tr>
            <td colspan="7">
              <h4 class="text-center text-info m-0">Products in your cart</h4>
            </td>
          </tr>
          
          <tr>
            <th>Id</th>
            <th>Images</th>
            <th>Product name</th>
            <th>Price</th>
            <th>weight(in kg)</th>
            <th>Total price</th>
            <th><a href="action.php?clear=all" class="badge-danger badge p-2" onclick="return confirm('Are you sure to clear your cart 😊 ')"><i class="fa fa-trash"></i>&nbsp;&nbsp;clear cart</a></th>
          </tr>
      </thead>
            <tbody>
              <?php 
    include 'config.php';
    $stmt = $conn->prepare("SELECT * FROM cart1");
    $stmt->execute( );
    $result = $stmt->get_result();
    $grand_total=0;
    while ($row = $result->fetch_assoc()):

                ?>

 <tr>
   <td><?php echo $row['id'] ?></td>
   <input type="hidden" value="<?php echo $row['id'] ?>" class="pid">
   <td><img src="images/<?php echo $row["product_image"]; ?>" width="50"></td>
   <td><?php echo $row['product_name'];?></td>
   <td><i class="fa fa-rupee-sign"></i><?php echo $row["price"]; ?></td>
   <td><input type="number" name="" class="form-control itemQty" value="<?php echo $row['qty'];?>" style="width: 75px"></td>
   <td>₹   <?php echo $row['total_price'];?></td>
   <input type="hidden" value="<?php echo $row['price'] ?>" class="pprice">
   <td>
     <a href="cart.php?action=delete&id="   class=" text-danger lead" onclick="return confirm('Are you sure to delete item ! ')"><i class="fa fa-trash"></i></a>
   </td>


   
 </tr>
    <?php 
    $grand_total+=$row['total_price'];


     ?>
      <?php endwhile; ?>
      <tr>
        <td colspan="3">
          <a href="vegetables.php" class="btn btn-success"> continue shopping</a>
        </td>
        <td colspan="2"><b>GRAND TOTAL</b></td>
        <td><b> ₹  <?=number_format($grand_total,2);?></b></td>
        <td>  <a href=" checkout.php" class="btn btn-info <?= ($grand_total>1)?"":"disabled"?>"><i class="fa fa-credit-card"> </i>&nbsp;  Checkout</a></td>
      </tr>
      </tbody>
        </table>
        
      </div>

      
    </div>
    
  </div>
  
</div>
<script>
// $(document).ready(function(){
//         $(".addItemBtn").click(function(e){
//           e.preventDefault();
//           var $form =$(this).closest(".form-submit");
//           var pid=$form.find(".pid").val();
//           var pname=$form.find(".pname").val();
//           var pimage=$form.find(".pimage").val();
//           var pprice=$form.find(".pprice").val();
//           var pcode=$form.find(".pcode").val();

//           $.ajax({
//             url:'action.php',
//             type: "POST",
                  
//             data:{pid:pid,pname:pname,pimage:pimage,pprice:pprice,pcode:pcode},
//             success:function(response){
//               $("#message").html(response);
//               load_cart_item_number();

//             }
//           });
//         });
        $(document).ready(function(){

$(".itemQty").on('change',function(){
var $el  =$(this).closest('tr');

var pid = $el.find(".pid").val();
var pprice = $el.find(".pprice").val();
var qty = $el.find(".itemQty").val();


$.ajax({
url

url:'action.php',
method:'post',
cache:false,
data:{qty:qty,pid:pid,pprice:pprice},
success:function (response) {

  console.log(response);
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
    }
    </script>


</body>
</html>