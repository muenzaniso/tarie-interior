<?php
 require 'connect.php';
 $sql = "SELECT * FROM products";
  $result = mysqli_query($con, $sql);
  ?>

 <!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Products</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body style="background-color: #ffcb0f">
 <div class="container">
 <div class="row">
 <div class="col-xs-12 col-md-12 col-lg-12"> 
 <h1>Tarie's Interior</h1>
 			<ul class="nav nav-tabs nav-justified" role="tablist">
 				<li role="presentation"><a href="index.html">Home</a></li>
 				<li class="active"><a href="">Products</a></li>
 				<li role="presentation"><a href="Contacts.html">Contatcts</a></li>
 				<li class="dropdown" role=presentation>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon gyyphicon-info-sign"></span>About<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="aboutmission.html">Mission</a></li>
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">History</a></li>
                </ul>
                </li>
 			</ul>
 </div>           
 </div>
 </div>   
<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="cart_title">
						<h4>Shopping Cart</h4>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr id="cart_th">
									<th>#</th>
									<th>Image</th>
									<th>Product name</th>
									<th>QUANTITY</th>
									<th>Price</th>
									<th>Buy</th>
								
								</tr>
							</thead>
							<tbody>
							 <?php 
                              
							  while($product = mysqli_fetch_object($result)) {?>
								<tr >
									<td><?php echo $product->ID ?></td>
									<td>
										<a href=""><img alt="" class="img-responsive" src="images/orange.jpg"><img src=<?php ?></a>
									</td>
									<td>
										<h6><a href="#"><?php echo $product->product_name ?></h6>
									</td>
									<td>
										<form id="qua_in" action="action_page.php">
											<input type="number" value="1" name="quantity" min="1" max="5">
										</form>
									</td>
									<td>
										<div class="cart-price"><?php echo $product->price ?></div>
									</td>
									<td>
										<div class="cart-subtotal"> <a href="cart.php?id <?php echo $product->ID;  ?>">Order Now<a/></div>
									</td>
									<td></td>
								</tr>
								
								<?php } ?>
								<tr>
									<td>2</td>
									<td>
										<a href="#"><img alt="" class="img-responsive" src="images/kcurtainn.jpg"></a>
									</td>
									<td>
										<h6><a href="#">Kitchen curtain</a></h6>
									</td>
									<td>
										<form id="qua_in_2" action="action_page.php">
											<input type="number" value="1" name="quantity" min="1" max="10">
										</form>
									</td>
									<td>
										<div class="cart-price">$85.99</div>
									</td>
									<td>
										<div class="cart-subtotal">$85.99</div>
									</td>
									<td><i class="fa fa-trash"></i></td>
								</tr>
								<tr >
									<td>3</td>
									<td>
									   <a href="#"><img src="images/bedcover.jpg" alt="" class="img-responsive"></a>	
									</td>
									<td>
									   <h6><a href="#">Baby bed cover</a></h6>	
									</td>
									<td>
										<form id="qua_in_3">
											<input type="number" name="quantity" min="1" max="5">
										</form>
									</td>
								</tr>
								<tr>
								    <td>4</td>
									<td>
									   <a href="#"><img src="images/epron.jpg" alt="" class="img-responsive"></a>	
									</td>
									<td>
									   <h6><a href="#">Epron</a></h6>	
									</td>
									<td>
										<form>
											<input type="number" name="quantity" value="1" min="1" max="20">
										</form>
									</td>
								</tr>
								<tr>
								    <td>5</td>
									<td>
									   <a href="#"><img src="" alt="" class="img-responsive"></a>	
									</td>
									<td>
									   <h6><a href="#">curtain1</a></h6>	
									</td>
									<td>
										<form>
											<input type="number" name="quantity" value="1" min="1" max="20">
										</form>
									</td>
								</tr>
								<tr>
								    <td>6</td>
									<td>
									   <a href="#"><img src="" alt="" class="img-responsive"></a>	
									</td>
									<td>
									   <h6><a href="#">curtain1</a></h6>	
									</td>
									<td>
										<form>
											<input type="number" name="quantity" value="1" min="1" max="20">
										</form>
									</td>
								</tr>
								<tr>
								    <td>7</td>
									<td>
									   <a href="#"><img src="" alt="" class="img-responsive"></a>	
									</td>
									<td>
									   <h6><a href="#">curtain1</a></h6>	
									</td>
									<td>
										<form>
											<input type="number" name="quantity" value="1" min="1" max="20">
										</form>
									</td>
								</tr>
								<tr>
								    <td>8</td>
									<td>
									   <a href="#"><img src="" alt="" class="img-responsive"></a>	
									</td>
									<td>
									   <h6><a href="#">curtain1</a></h6>	
									</td>
									<td>
										<form>
											<input type="number" name="quantity" value="1" min="1" max="20">
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div> 


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/tarie.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery-2.1.1.min.js"></script>

</body>
</html>