<?php
include 'connection1.php';
if(isset($_COOKIE['id']))
{
  $log_id=$_COOKIE['id'];
}
$sql="select productid from cart where username='$log_id'";
$sql1=mysqli_query($conn,"select * from cart where username='$log_id'");
echo"$log_id";
if(mysqli_num_rows($sql1)>0)
{
        $gender=mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($gender)){
        $results=$row["productid"];
        }
$query="select * from menu where foodid='$results'"; 
$result=mysqli_query($conn,$query); 
echo"$result";
}
else
{
    echo "<script>alert('no request found');</script>";
    echo "<script>window.location.href='profile.php';</script>";
}
?>
<script type="text/javascript" src="1.js"></script>
<html>
   <head>
      <title>Website Site</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="foodpage2.css">
   </head>
   <body>
	
   <div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    FOOD CART
  </div>
  <?php while($rows=mysqli_fetch_assoc($result)) 
		{
        ?> 
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
    <p><?php $rows['foodid']; ?>
    <div class="image">
      <img src=<?php echo $rows['image']; ?> alt="" />
    </div>
 
    <div class="description">
      <span><?php echo $rows['foodname']; ?></span>
    </div>
 
    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
      </button>
      <input type="text" name="name" value="1">
      <button class="minus-btn" type="button" name="button">
        <img src="minus.svg" alt="" />
      </button>
    </div>
 
    <div class="total-price"><?php echo $rows['price']; ?></div>
  </div>
  <?php 
    }
          ?>   
    </body>
</html>
