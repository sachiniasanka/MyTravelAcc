<?php
$customerId=$_GET["cid"];
$customerName=$_GET["cname"];
$customerEmail=$_GET["email"];
$custContact=$_GET["ccontact"];
$customerAddress=$_GET["caddress"];

$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else{
    $result=mysqli_query($connection,"SELECT * from client WHERE cid='$id'");
    if (mysqli_num_rows($result)>0){
        $rowData=mysqli_fetch_row($result);
        echo $rowData[1];
    }else{
        echo "failed to load customer";
    }
    mysqli_free_result($result);
}
mysqli_close($connection);