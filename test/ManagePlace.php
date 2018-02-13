

<?php
include "headerAdmin.php";
?>


<?php

$connection=mysqli_connect("localhost", "root","mysql", "mt", "3306");
if (!$connection){
    echo mysqli_connect_error();
}else{
$resultset = mysqli_query($connection, "select * from place");
?>


<br>
<br>
<br>
<br>

<section class="content-header">
    <h1>

        <small>Manage Place</small>
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
                    <button type="submit" class="btn btn-primary" id="btnNewPlace"><a href="SavePlace.php">New Place</a></button>&nbsp;
                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Delete Place</button>
                    <!--                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Search TransportPack</button>-->
                </div>
                <br>

                <div class="row box-pane">
                    <div class="col-sm-12">
                        <table class="table" id="tableN">
                            <thead style="background-color: #001F3F;color: white">
                            <tr>
                                <th></th>
                                <th>Place Category</th>
                                <th>Place Name</th>


                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                              <?php
                            while ($rowData = mysqli_fetch_row($resultset)) {
                                echo "<tr>
                            <td><input type=\"checkbox\" value=$rowData[0] name=\"packCate[]\"></td>
                            <td class='placeCategory'>$rowData[0]</td>
                            <td class='placeName'>$rowData[1]</td>
                           
                            <td><a class='btnPencil' href='updatePlace.php ? plcategory =$rowData[0] & plname=$rowData[1]  & title=Manage Place'><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> </a></td>
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


