
<?php
include "headerAdmin.php";
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php

$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");
if (!$connection){
    echo mysqli_connect_error();
}else{
$resultset = mysqli_query($connection, "select * from client");
?>

<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-body">
                <div class="box-header with-border">
                    <button type="submit" class="btn btn-primary" id="btnAdd"><a href="saveCustomer.php">New Customer<a/></button>&nbsp;
                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Delete Customer</button>
                </div>
                <br>
                <br>

                <div class="row box-pane">
                    <div class="col-sm-12">
                        <table class="table" id="tableN">
                            <thead style="background-color: #001F3F;color: white">
                            <tr>
                                <th></th>
                                <th>Cust ID</th>
                                <th>Cust Name</th>
                                <th>Cust E-mail</th>
                                <th>Cust Address</th>
                                <th>Cust Contact</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($rowData = mysqli_fetch_row($resultset)) {
                                echo "<tr>
                            <td><input type=\"checkbox\" value=$rowData[0] name=\"customer Id[]\"></td>
                            <td class='customer Id'>$rowData[0]</td>
                            <td class='customer Name'>$rowData[1]</td>
                            <td class='customer Email'>$rowData[2]</td>
                            <td class='customer Contact'>$rowData[3]</td>
                            <td class='customer Address'>$rowData[4]</td>
                            <td><a class='btnPencil' href='updateClient.php ? cid=$rowData[0] & cname=$rowData[1] & email=$rowData[2] & ccontact=$rowData[3] & caddress=$rowData[4] & title=Manage Clients'><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> </a></td>
                    </tr>
                    ";
                            }

                            mysqli_free_result($resultset);

                            mysqli_close($connection);
                            }

                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
</section>
<br>
<br>
<br>

<?php
include "footer.php";
?>
