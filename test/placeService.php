<?php
$id=$_GET["plcategory"];

$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");

if (!$connection){
    echo mysqli_connect_error();
}else{
    $result=mysqli_query($connection,"SELECT * from place WHERE plcategory='$id'");
    if (mysqli_num_rows($result)>0){
        $rowData=mysqli_fetch_row($result);
        echo $rowData[1];
    }else{
        echo "failed to load place";
    }
    mysqli_free_result($result);
}
mysqli_close($connection);