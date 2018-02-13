<?php
$placeCate=$_POST["placeCate"];
$plname=$_POST["placeName"];





$connection = mysqli_connect("localhost", "root", "mysql", "mt", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else {

    $result = mysqli_query($connection, "UPDATE place SET  plname='$plname' WHERE plcategory='$placeCate'");

    if ($result && mysqli_affected_rows($connection) > 0){
        echo "<script>window.location.replace(ManagePlace.php>";
    }else{
        echo "Failed to update the Place", "<br>", mysqli_error($connection);
    }

    mysqli_close($connection);
}