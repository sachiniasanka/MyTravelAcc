
<?php
include "headerAdmin.php";
?>



<?php

$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");
if (!$connection){
    echo mysqli_connect_error();
}else{
$resultset = mysqli_query($connection, "select * from package");
?>


<br>
<br>
<br>
<br>
<section class="content-header">
    <h1>

        <small>Manage Package</small>
    </h1>
    <ol class="breadcrumb">
        <!--            <li><a href="index1.php"><i class="fa fa-dashboard"></i> Home</a></li>-->

    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-body">
                <div class="box-header with-border">
                    <button type="submit" class="btn btn-primary" id="btnNewCustomer" ><a href="SavePack.php">New Package</a></button>&nbsp;
                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Delete Package</button>
<!--                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Search Package</button>-->
                </div>
                <br>

                <div class="row box-pane">
                    <div class="col-sm-12">
                        <table class="table" id="tableN">
                            <thead style="background-color: #001F3F;color: white">
                            <tr>
                                <th></th>
                                <th>Package ID</th>
                                <th>Package Category</th>
                                <th>Package Type</th>
                                <th>Hotel Name</th>
                                <th>Transportation</th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            while ($rowData = mysqli_fetch_row($resultset)) {
                                echo "<tr>
                            <td><input type=\"checkbox\" value=$rowData[0] name=\"packageId[]\"></td>
                            <td class='packageId'>$rowData[0]</td>
                            <td class='packageCate'>$rowData[1]</td>
                            <td class='packageType'>$rowData[2]</td>
                            
                            <td><a class='btnPencil' href='updatePack.php ? packId=$rowData[0] & packCate=$rowData[1] &  packType=$rowData[2] & title=Manage Package'><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> </a></td>
                    </tr> ";
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
