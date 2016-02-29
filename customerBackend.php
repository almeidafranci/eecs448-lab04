<?php
$quantity1 = $_POST['product1'];
$quantity2 = $_POST['product2'];
$quantity3 = $_POST['product3'];

if ($_POST['shipping'] == "free") {
  $shippingName = "Free 7 day shipping";
  $shippingValue = 0;
}else if ($_POST['shipping'] == "night") {
  $shippingName = "Over night shipping";
  $shippingValue = 50;
}else if ($_POST['shipping'] == "three-day") {
  $shippingName = "Three day shipping";
  $shippingValue = 5;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="EECS 448 - Spring 2016">
    <meta name="author" content="Francinaldo Almeida" >

    <title>Francinaldo Almeida - EECS 448 Lab 04 Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">EECS 448 - Lab 04</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="exercise1.php">Exercise 1</a></li>
            <li><a href="Quiz.html">Exercise 2</a></li>
            <li class="active"><a href="customerFrontend.html">Exercise 3</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div>
        <h1>Your Purchase</h1>
        <p><?php echo "Welcome ".$_POST['username'].", your password is ".$_POST['password']."."; ?></p>
        <table class="table">
          <tr>
            <td></td>
            <td>Quantity</td>
            <td>Cost Per Item</td>
            <td>Sub Total</td>
          </tr>
          <tr>
            <td>Almond</td>
            <td><?php echo $quantity1; ?></td>
            <td>$ 40.00</td>
            <td><?php echo "$".($quantity1*40); ?></td>
          </tr>
          <tr>
            <td>Peanut</td>
            <td><?php echo $quantity2; ?></td>
            <td>$ 55.00</td>
            <td><?php echo "$".($quantity2*55); ?></td>
          </tr>
          <tr>
            <td>Cashew</td>
            <td><?php echo $quantity3; ?></td>
            <td>$ 73.00</td>
            <td><?php echo "$".($quantity3*73); ?></td>
          </tr>
          <tr>
            <td>Shipping</td>
            <td colspan="2"><?php echo $shippingName; ?></td>
            <td><?php echo "$".$shippingValue; ?></td>
          </tr>
          <tr>
            <td colspan="3">Total Cost</td>
            <td><?php echo "$".($quantity1*40 + $quantity2*55 + $quantity3*73 + $shippingValue); ?></td>
          </tr>
        </table>
      </div>

    </div>

  </body>
</html>