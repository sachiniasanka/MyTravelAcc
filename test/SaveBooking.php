

<?php
require "headerAdmin.php";
?>

<br>
<br>
<br>
<br>
<br>
<br>
<section class="content-header">
    <h1>
        <!--        --><?//=$title?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="ManageClients.php"><i class="fa fa-dashboard"></i> Save Booking</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Booking Id :
            </div>
            <div class="col-sm-9">
                <input name="custid" id="custid" class="form-control" placeholder="B001">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Customer Id :
            </div>
            <div class="col-sm-9">
                <input name="name" id="name" class="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
               Customer Name :
            </div>
            <div class="col-sm-9">
                <input id="mail" name="mail" class="form-control" type="email">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Contact Number :
            </div>
            <div class="col-sm-9">
                <input id="cNum" name="cNum" class="form-control" type="tel">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Guide Name :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Package Category :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Package Type :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Hotel Name :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Transportation :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Check In :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" type="date">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Check Out :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" type="date" >
            </div>
        </div>
        <br>



        <div>
            <button id="btnsave" class="btn btn-primary" type="submit">Save Customer</button>
        </div>
        <br>
        <br>
    </div>
    <div class="col-sm-1"></div>


</section>



<?php
require "footer.php";
?>