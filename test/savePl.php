<?php

$placeCate=$_POST["placeCate"];
$placeName=$_POST["placeName"];



$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO place VALUE ('$placeCate',$placeName')");
    if ($result){
        echo "<script>window.location.replace(\"Manage Place?title=Manage Place\");</script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);
}
