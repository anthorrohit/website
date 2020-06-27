<?php 

$db=mysqli_connect("localhost","root","","cart_system");
$sql="SELECT * FROM blog ";
$result = mysqli_query($db,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="all.min.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>blog</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">justdemandsolutions.com</a>
    </div>
    
    <ul class="  nav navbar-nav ">
      <li class="active ml-auto"><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">shop by cateogery
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="vegetables.php">vegetables</a></li>
          <li><a href="fruits.php">fruits</a></li>
         
        </ul>
      </li>
      <li class="ml-auto"><a href="contact.php"><i class="fa fa-handshake"> contact us</i></a></li>
      
    </ul>
  </div>
</nav>
<!-- -------------------------------------------------------------------- -->
              <div id="content">
<?php 

while ($row = mysqli_fetch_array($result)) {
	

	echo "<h2> <b>*</b> ".$row['title']."</h2>";
	echo "<br><br>";
  echo "<div id='wv'>";

	echo "<img src= 'images/".$row['image']."'>";
	
	echo "<h3>".$row['blog']."</h3>";

echo "</div>";

}


 ?>
              	
              </div>

</body>
<style type="text/css">
	*{
		margin: 0;padding: 0;
	}
#wv{
	margin-left: 75px;

}


	#wv img{
		width: 190px;height: 190px;
		border-radius: 30px;

	}

</style>
</html>
