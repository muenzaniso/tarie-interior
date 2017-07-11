<?php

session_start();
require 'connect.php';
require 'item.php'; 
$id = $_GET['ID'];

$result = mysqli_query($con,'SELECT * FROM products WHERE id = $id ');
if (mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)) {
		echo "id: ".$row["id"]. "-Image: ".$row["image"]. "".$row["product_name"]."<br/>";
	}
	}else {
		echo "0 results";
	}
mysqli_close($con);
$product = mysqli_fetch_object($result);

 if (isset($_GET['ID'])) {
 	$item = new Item ();
 	$item->id = $product->id;
 	$item->image = $product->image;
 	$item->name = $product->name;
 	$item->price = $product->price;
 	$item->quantity = 1;
 	$_SESSION['cart'][] = $item;
 }
 
  ?>

  <table cellpadding="2" cellspacing="2" border="1">
   <tr> 
      <th>Id</th>
      <th>Image</th>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Subtotal</th>
   </tr>
   <?php 
     $cart = unserialize(serialize($_SESSION['cart']));
     for ($i=0; $i <count('$ cart') ; $i++) { 

   ?>
   <tr>
   	<td><?php echo $cart[$i]->id ?></td>
   	<td><?php echo $cart[$i]->image ?></td>
   	<td><?php echo $cart[$i]->name ?></td>
   	<td><?php echo $cart[$i]->price ?></td>
   	<td><?php echo $cart[$i]->quantity ?></td>
   	<td><?php echo $cart[$i]->price*$cart[$i]->quantity; ?></td>
   </tr>
  	<?php }  ?>
  </table>