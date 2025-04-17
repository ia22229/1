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
$result=mysqli_query($conn, $query);
      }
else
{
    echo "<script>alert('no request found');</script>";
    echo "<script>window.location.href='profile.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Marriage Bureau</title>
<link rel="shortcut icon" href="logo1.png" type="image/x-icon">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style9.css">
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <h5>Marriage Bureau</h5>
            </div>
            <ul class="menu">
                <li><a href="profile.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="bar">
                <div class="bar-1"></div>
                <div class="bar-2"></div>
                <div class="bar-3"></div>
            </div>
        </nav>
    </header>
  <div class="banner">
        <div class="wrapper">
    <?php while($rows=mysqli_fetch_assoc($result)) 
		{
        ?> 
        <section style="margin:10px">
        <table>
		<tr> 
        <p><strong>Age:</strong> <?php echo $rows['foodid']; ?></p>
        <p><strong>Gender:</strong> <?php echo $rows['foodname']; ?></p> 
        <p><strong>Job:</strong> <?php echo $rows['price']; ?></p> 
		</tr> 
        </table>
        </section>
	<?php 
    }
          ?> 
</body>

</html>
