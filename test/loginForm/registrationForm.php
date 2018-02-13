<?php

$fullName=$_POST["fullName"];
$email=$_POST["email"];
$userName=$_POST["userName"];
$userPassword=$_POST["userPassword"];
$confirmPassword=$_POST["confirmPassword"];

$connection=mysqli_connect("localhost", "root","mysql", "travel", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO registrationform VALUE ('$fullName','$email','$userName','$userPassword','$confirmPassword')");
    if ($result){
        echo "<script>window.location.replace(\"index.php\");</script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>