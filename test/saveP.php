<?php

$packId=$_POST["packageId"];
$packCate=$_POST["packageCate"];
$packType=$_POST["packageType"];


$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO package VALUE ('$packId',$packCate',$packType')");
    if ($result){
        echo "<script>window.location.replace(\"Manage Package?title=Manage Package\");</script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);
}