<?php
$packId=$_POST["packageId"];
$packCate=$_POST["packageCate"];
$packType=$_POST["packageType"];




$connection = mysqli_connect("localhost", "root", "mysql", "mt", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else {

    $result = mysqli_query($connection, "UPDATE package SET pcat=$packCate, ptype='$packType' WHERE pid='$packId'");

    if ($result && mysqli_affected_rows($connection) > 0){
        echo "<script>window.location.replace(PaPackage.phppt>";
    }else{
        echo "Failed to update the Pack", "<br>", mysqli_error($connection);
    }

    mysqli_close($connection);
}