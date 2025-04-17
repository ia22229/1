<?php
include 'connection1.php';
if(isset($_COOKIE['id']))
{
  $log_id=$_COOKIE['id'];
}
$sql="select productid from cart where username='$log_id'";
$sql1=mysqli_query($conn,"select * from cart where username='$log_id'");
if(mysqli_num_rows($sql1)>0)
{
        $gender=mysqli_query($conn, $sql);

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
  <div class="title">
    FOOD CART
  </div>
  <?php while ($row=mysqli_fetch_assoc($gender)) 
		{
        ?> 
        <?php $results=$row["productid"];
        $query="select * from menu where foodid='$results'"; 
        $result=mysqli_query($conn,$query); 
         ?>
  <?php while($rows=mysqli_fetch_assoc($result)) 
		{
        ?> 
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
    <?php $h=$rows['foodid']; ?>
    <div class="image">
    <?php
    if($h==1){ ?>
    <img class="img2"src="biriyani.jpg" width="100px" height="100px" alt=""/>
    <?php }?>
    <?php
    if($h==2){ ?>
    <img class="img2"src="2.jpg" width="100px" height="100px" alt=""/>
    <?php }?>
    <?php
    if($h==3){ ?>
    <img class="img2"src="3.jpg" width="100px" height="100px" alt=""/>
    <?php }?>
    <?php
    if($h==4){ ?>
    <img class="img2"src="4.jpg" width="100px" height="100px" alt=""/>
    <?php }?>
    <?php
    if($h==5){ ?>
    <img class="img2"src="5.webp" width="100px" height="100px" alt=""/>
    <?php }?>
    <?php
    if($h==6){ ?>
    <img class="img2"src="6.jpg" width="100px" height="100px" alt=""/>
    <?php }?>
    <?php
    if($h==7){ ?>
    <img class="img2"src="7.jpg" width="100px" height="100px" alt=""/>
    <?php }?>
    <?php
    if($h==8){ ?>
    <img class="img2"src="8.webp" width="100px" height="100px" alt=""/>
    <?php }?>
    
    <?php
    if($h==9){ ?>
    <img class="img2"src="9.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==10){ ?>
    <img class="img2"src="10.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==11){ ?>
    <img class="img2"src="11.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==12){ ?>
    <img class="img2"src="12.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==13){ ?>
    <img class="img2"src="13.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==14){ ?>
    <img class="img2"src="14.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==15){ ?>
    <img class="img2"src="15.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==16){ ?>
    <img class="img2"src="16.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==17){ ?>
    <img class="img2"src="17.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==18){ ?>
    <img class="img2"src="18.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==19){ ?>
    <img class="img2"src="19.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==20){ ?>
    <img class="img2"src="20.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==21){ ?>
    <img class="img2"src="21.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==22){ ?>
    <img class="img2"src="22.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==23){ ?>
    <img class="img2"src="23.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    <?php
    if($h==24){ ?>
    <img class="img2"src="24.jpg" width="100px" height="100px" alt=""/>
    <?php }?>

    
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
 
    <div class="total-price">RS:<?php echo $rows['price']; ?></div>
  </div>
  <?php 
    }
          ?>   
            <?php 
    }
          ?>  
    </body>
</html>
