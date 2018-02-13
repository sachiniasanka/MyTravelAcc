

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
        <li><a href="ManageHotel.php"><i class="fa fa-dashboard"></i> Save Hotel</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Hotel Category :
            </div>
            <div class="col-sm-9">
                <input name="custid" id="custid" class="form-control" placeholder="UP COUNTRY">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Hotel Type :
            </div>
            <div class="col-sm-9">
                <input name="name" id="name" class="form-control" placeholder="LUXURY" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Hotel Name :
            </div>
            <div class="col-sm-9">
                <input id="mail" name="mail" class="form-control" >
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
                Address :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Payment for 1 night 1 room :
            </div>
            <div class="col-sm-9">
                <input id="address" name="address" class="form-control" >
            </div>
        </div>
        <br>


        <div>
            <button id="btnsave" class="btn btn-primary" type="submit">Save Hotel</button>
        </div>
        <br>
        <br>
    </div>
    <div class="col-sm-1"></div>


</section>



<?php
require "footer.php";
?>