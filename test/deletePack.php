<?php
$connection = mysqli_connect("localhost", "root", "mysql", "mt", "3306");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['packageId'] as $value) {
        $query = "delete from package where pid='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"Manage-Package.php?title=Manage Package\");</script>";
        } else {
            header("Location: deletePack.php");
            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);