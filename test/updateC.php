<?php
$customerId=$_POST["customer-id"];
$customerName=$_POST["customer-name"];
$customerEmail=$_POST["customer-email"];
$customerContact=$_POST["customer-contact"];
$customerAddress=$_POST["customer-address"];




$connection = mysqli_connect("localhost", "root", "mysql", "mt", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else {

    $result = mysqli_query($connection, "UPDATE client SET cname=$customerName, cemail='$customerEmail',ccontact='$customerContact'caddress='$customerAddress' WHERE cid='$customerId'");

    if ($result && mysqli_affected_rows($connection) > 0){
        echo "<script>window.location.replace(ManageClients.php>";
    }else{
        echo "Failed to update the Client", "<br>", mysqli_error($connection);
    }

    mysqli_close($connection);
}