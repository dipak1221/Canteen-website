<?php
//session_start();
require_once('config.php');

$username=$_POST['name'];
$password=$_POST['password'];

$sql="select * from user where name='$username' and password='$password'";

// $result=$connection->query($sql);

// $row=mysqli_fetch_array($result);

$result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
           header("Location:index.html");
        }  
        else{  
// echo '<script>alert("Wrong Username And Password")</script>';
header("Location:login.html");
} 

?>