<?php
    $username = $_POST['username'];
    $mob= $_POST['mob'];
    $password = $_POST['password'];
    $con = new mysqli("localhost","root","","mydb");
    $query="select username from table1 where username='$username'";
    $log_id=mysqli_query($con, $query);
    while ($row=mysqli_fetch_assoc($log_id)){
        $result=$row["username"];
        setcookie("id","$result",time() +3600*24);
    }
    if($con->connect_error)
    {
        die("Failed to connect:".$con->connect_error );
    }
    else
    {
        $stmt = $con->prepare("select * from table1 where username= ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password)
            {
                header("Location: home.html");
            }
            else
            {
                echo "<h2>Invalid Email or Password</h2>";
            }
        }
        else
        {
            echo "<h2>  Invalid User or Password  </h2>";
        }
    }
?>
