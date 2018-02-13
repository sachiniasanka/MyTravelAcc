<?php
include "headerAdmin.php";
?>

<br>
<br>
<br>
<br>
<br>
<br>

<section class="content-header">
    <h1>

        <small>Manage Hotel</small>
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
                    <button type="submit" class="btn btn-primary" id="btnNewCustomer"><a href="SaveHotel.php">New Hotel</a></button>&nbsp;
                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Delete Hotel</button>
<!--                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Search Hotel</button>-->
                </div>
                <br>

                <div class="row box-pane">
                    <div class="col-sm-12">
                        <table class="table" id="tableN">
                            <thead style="background-color: #001F3F;color: white">
                            <tr>
                                <th></th>
                                <th>Hotel Category</th>
                                <th>Hotel Type</th>
                                <th>Hotel Name</th>
                                <th>Payment for 1 night/ 1 room</th>
                                <th>Contact Num</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>



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


