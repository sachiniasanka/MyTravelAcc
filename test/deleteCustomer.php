<?php
$connection = mysqli_connect("localhost", "root", "mysql", "mt", "3306");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['customer-id'] as $value) {
        $query = "delete from client where cid='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"ManageClients?title=Manage Clients\");</script>";
        } else {
            header("Location: deleteCustomer.php");
            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);