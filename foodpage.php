<?php
include 'connection1.php';
if(isset($_COOKIE['id']))
{
  $log_id=$_COOKIE['id'];
}
if(isset($_POST['a'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='1'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('1','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
if(isset($_POST['b'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='2'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('2','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
if(isset($_POST['c'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='3'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('3','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
if(isset($_POST['d'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='4'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('4','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
if(isset($_POST['e'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='5'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('5','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
if(isset($_POST['f'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='6'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('6','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
if(isset($_POST['g'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='7'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('7','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
if(isset($_POST['h'])){
  $sql1=mysqli_query($conn,"select username from cart where username='$log_id' && productid='8'");
  if(mysqli_num_rows($sql1)<1){
  $sql2=mysqli_query($conn,"insert into cart(productid,username) values('8','$log_id')");
}
else{
  echo "<script>alert('Product ordered');</script>";
  echo"<script>window.location.href='foodpage.php';</script>";
}
}
?>
<html>
   <head>
      <title>Website Site</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="foodpage.css">
   </head>
   <body>
<div class="width-100 top-header">
    <div class="container">
      <div class="width-50">
        <p class="head1p1 headquote">Theeta: India's Fastest Online Delivery app</p>
      </div>
      <div class="width-50">
        <ul class="head1ul cashback-sect">
          <li>
            <i class="fa fa-users" aria-hidden="true"></i>
            <a class="head1mr" href="#">Refer Your Friend And Earn Rs. 500 Cashback</a>
          </li>
          <li>
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <a href="#"> Download App</a>
          </li>
        </ul>
        </p>
      </div>
    </div>
  </div>
 <form method="post" action="" >
<div class="width-100 margin-top-50">
    <div class="container">
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\biriyani.jpg">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="#">Chicken Biriyani</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>

            </div>
            <button type="submit" name="a">Order</button>
          </div>
        </div>
      </div>
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\chinese1.jpg">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="#">chicken noodles</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>
            </div>
            <button type="submit" name="b">Order</button>
          </div>
        </div>
      </div>
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\chickenfry.jpg">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="login.php">chicken fry</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>
            </div>
            <button type="submit" name="c">Order</button>
          </div>
        </div>
      </div>
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\kerala-parotta.jpg">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="#">porotta</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>
            </div>
            <button type="submit" name="d">Order</button>
          </div>
        </div>
      </div>
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\meals.webp">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="#">meals</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>
            </div>
            <button type="submit" name="e">Order</button>
          </div>
        </div>
      </div>
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\kerala-beef-fry-recipe-500x500.jpg">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="#">beef fry</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>
            </div>
            <button type="submit" name="f">Order</button>
          </div>
        </div>
      </div>
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\friedrice.jpg">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="#">fried rice</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>
            </div>
            <button type="submit" name="g">Order</button>
          </div>
        </div>
      </div>
      <div class="width-25">
        <div class="product-section">
          <div class="product-border">
            <div class="product-img-center">
              <a href="#">
                <img class="product-img" src="pictures\chinese2.webp">
              </a>
            </div>
            <div>
              <p class="product-name">
                <a href="#">chicken chilly</a>
              </p>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>(5)</span>
              </p>
              <p class="product-price">
                <span class="product-discounted-price">Rs.549.00</span>
                <span class="product-original-price">Rs.554</span>
                <span class="product-discount">90%OFF</span>
            </div>
            <button type="submit" name="h">Order</button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
<div class="width-100 margin-top-50 feature-sect">
    <div class="container">
      <div class="width-20 featured-padding">
        <div class="featured-border">
          <div class="width-20 featured-content">
            <i class="fa fa-truck" aria-hidden="true"></i>
          </div>
          <div class="width-80 featured-content margin-top-8">
            <h4>Instant Delivery</h4>
            <p>One day shipping on all order</p>
          </div>
        </div>
      </div>
      <div class="width-20">
        <div class="featured-border">
          <div class="featured-bord">
            <div class="width-20 featured-content">
              <i class="fa fa-circle-o" aria-hidden="true"></i>
            </div>
            <div class="width-80 featured-content margin-top-8">
              <h4>ONLINE SUPPORT 24/7</h4>
              <p>Support online 24 hours a day</p>
            </div>
          </div>
        </div>
      </div>
      <div class="width-20">
        <div class="featured-border">
          <div class="width-20 featured-content">
            <i class="fa fa-life-ring" aria-hidden="true"></i>
          </div>
          <div class="width-80 featured-content margin-top-8">
            <h4>TRY AND BUY</h4>
            <p>Try Product, If you like it then buy it</p>
          </div>
        </div>
      </div>
      <div class="width-20">
        <div class="featured-border">
          <div class="width-20 featured-content">
            <i class="fa fa-gift" aria-hidden="true"></i>
          </div>
          <div class="width-80 featured-content margin-top-8">
            <h4>INSTANT DISCOUNT</h4>
            <p>Upto 50% instant discount on all product</p>
          </div>
        </div>
      </div>
      <div class="width-20">
        <div class="featured-border">
          <div class="width-20 featured-content">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
          </div>
          <div class="width-80 featured-content margin-top-8">
            <h4>SECURE PAYMENT</h4>
            <p>All cards accepted</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="width-100 margin-top-50 footer">
    <div class="container">
      <div class="width-50">
        <h2 class="quicklink-heading">Account Detail</h2>
        <ul class="quicklink-menu">
          <li><a href="home.html">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Search</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="#">Checkout</a></li>
        </ul>
      </div>
      <div class="width-50">
        <h2 class="quicklink-heading">Quick Link</h2>
        <ul class="quicklink-menu">
          <li><a href="#">My Profile</a></li>
          <li><a href="#">Change Password</a></li>
          <li><a href="cart.php">Order History</a></li>
          <li><a href="cart.php">My Whislist</a></li>
          <li><a href="#">My Cashback</a></li>
        </ul>
      </div>
    </div>
  </div>
 </form>
    </body>
</html>
