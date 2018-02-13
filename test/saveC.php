<?php
//$customerId=$_POST["cid"];
//$customerName=$_POST["cname"];
//$customerEmail=$_POST["email"];
//$customerContact=$_POST["ccontact"];
//$customerAddress=$_POST["caddress"];
//
//$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");
//
//if (!$connection){
//    echo mysqli_connect_error();
//}else{
//    $result=mysqli_query($connection,"INSERT INTO client VALUE ('$customerId','$customerName','$customerEmail','$customerContact','$customerAddress')");
//    if ($result){
//        echo "<script>window.location.replace(\"ManageClients.php?title=Manage Clients\");</script>";
//    }else{
//        echo "failed to add","<br>",mysqli_error($connection);
//    }
//    mysqli_close($connection);


$id=$_POST["id"];
$name=$_POST["name"];
$connection=mysqli_connect("localhost","root","mysql","mt","3306");
if (!$connection) {
    echo mysqli_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO client VALUES('$id','$name')");
    if ($result){
        echo "<script>window.location.replace(\"ManageClients.php?title=manage clients\");<script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);


}