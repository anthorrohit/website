
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><script data-ad-client="ca-pub-2772964667747237" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Overlock+SC&display=swap" rel="stylesheet"> <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link rel="stylesheet" href="animate.min.css">
<link rel="stylesheet" type="text/css" href="contact.css">
	<title></title>
</head>
<body bgcolor="white" style="font-family: 'Overlock SC', cursive;">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark pd-3">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.html"><!-- <img src="unnamed.jpg" id="logo"> -->Anthor Rohit</a>
  
  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link " href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="blog.php">BLOG</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="photo.php">PHOTOGRAPHS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="contact.php">CONTACT ME</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="about.php">ABOUT ME</a>
    </li>
  </ul>
</nav>
<!-- ------------------------nav bar complete and body start--------------------------------------------------------------- -->

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 px-4 pb-4" id="order">
      <h4 class="text-center text-info p-2">Contact me</h4>
      


      </div>

      <form action="action.php" method="POST" id="placeOrder">
        <div class="form-group">
        <input type="text" name="name" placeholder="your good name" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="email please" required>
      </div>
        <div class="form-group">
        <input type="file" name="file" class="form-control " placeholder="Any type of file image screenschot " >
      </div>
      <div class="form-group">
        <textarea name="message" class="form-control" rows="3" cols="10" placeholder="Enter your Delivery address"></textarea>
</div>      
          
          <div class="form-group">
        <input type="submit" name="submit" value="place Order" class="btn btn-danger btn-block btn-submit"></div>

        
      </form>
      
    </div>
  </div>
  
</div>
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









<!-- ------------------------body end---------------------------------------------------------------------------------------- -->
<script type="text/javascript">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</script>
</body>
</html>