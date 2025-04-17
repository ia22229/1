<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phoneno=$_POST['phoneno'];
    $age=$_POST['age'];
    $address=$_POST['address'];

    $conn = new mysqli('localhost','root','','mydb' );
    if($conn->connect_error)
    {
        die('Connection failed : '. $conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("INSERT INTO table1(username,password,phoneno,age,address) VALUES (?,?,?,?,?)"); 
        $stmt->bind_param("sssss",$username,$password,$phoneno,$age,$address);
        $stmt->execute();
        header("Location: login.html");
        $stmt->close(); 
        $stmt->close();
    }

?>