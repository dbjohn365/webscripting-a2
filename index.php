 <?php

    $databaseHost = 'localhost'; //nama host
    $databaseName = 'dbjohn'; //nama database
    $databaseUsername = 'root'; //username phpmyadmin
    $databasePassword = ''; //password phpmyadmin   

    $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } 
    // echo "Connected successfully";
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dez Boutique</title>
    <link rel="shortcut icon" href="/images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
 <div class = container>
 <div class = row>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="images/logo.svg" alt="" style="height:60px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
          <a class="dropdown-item" href="index.php">View Product</a>
          <a class="dropdown-item" href="add-new-product.html">Add New Product</a>
          
        </div>
      </li>
    </ul>
	</div>
	
	</div>
	<div class=row>
    <?php include('detail.php') ?>
	
	<footer class="page-footer font-small bg-light">
    <div class="footer-copyright text-center py-3">
        Copyright &copy; 2021
        <a href="#">Dez Boutique</a>
    </div>
	</div>
	</div>
</footer>
</body>
</html>
