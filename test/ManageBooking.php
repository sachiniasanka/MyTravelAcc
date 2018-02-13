<?php
include "headerAdmin.php";
?>


<br>
<br>
<br>
<br>


<section class="content-header">
    <h1>

        <small>Manage Booking</small>
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
                    <button type="submit" class="btn btn-primary" id="btnNewCustomer">New Booking</button>&nbsp;
                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Delete Booking</button>
<!--                    <button type="button" id="btnDelete" name="submit1" class="btn btn-danger">Search Booking</button>-->
                </div>
                <br>

                <div class="row box-pane">
                    <div class="col-sm-12">
                        <table class="table" id="tableN">
                            <thead style="background-color: #001F3F;color: white">
                            <tr>
                                <th></th>
                                <th>Cust Id</th>
                                <th>Cust Name</th>
                                <th>PackCate</th>
                                <th>PackType</th>
                                <th>HotelName</th>
                                <th>Transportation</th>
                                <th>CountOfTravellers</th>
                                <th>CheckIn</th>
                                <th>CheckOut</th>
                                <th>Contact Num</th>
                                <th>Payment</th>
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


