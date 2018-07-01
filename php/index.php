<?php
 require 'connect.php';
 $sql = "SELECT * FROM products";
  $result = mysqli_query($conn, $sql);
  ?>

 <!DOCTYPE html>


<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/custom.css"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">	
        <link rel="stylesheet" type="text/css" href="css/responsive.css">	
	</head>


	<body>
	<div class="container">
 <div class="row">
 <div class="col-xs-12 col-md-12 col-lg-12"> 
 <h1>Tarie's Interior</h1>
 			<ul class="nav nav-tabs nav-justified" role="tablist">
 				<li role=presentation><a href="index">Home</a></li>
 				<li role=presentation><a href="productscoming">Products</a></li>
 				<li role=presentation><a href="contacts">Contatcts</a></li>
 				<li class="dropdown" role=presentation>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon gyyphicon-info-sign"></span>About<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="aboutmission">Mission</a></li>
                    <li><a href="#">Vision</a></li>
                    <!--<li><a href="#">History</a></li>-->
                </ul>
                </li>
 			</ul>

 </div> 
 </div>	
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">Your online store</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
<nav class="navbar navbar-default" id="nvv">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span> MY Account</a>
    </div>
    <ul class="nav navbar-nav" >
      <li ><a href="#"><span class="glyphicon glyphicon-heart"></span> Wish List</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Checkout</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>		
<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/stack.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/martina.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/mates.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Apple new i phone 6</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/sofa.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Sony playstation microsoft</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$200.00</ins> <del>$225.00</del>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/curtain.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/tarie.js"></script>
<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="../bootstrap/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

</body>
</html>