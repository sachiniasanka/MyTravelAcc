

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
        <li><a href="Package.php"><i class="fa fa-dashboard"></i> Save Package</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-3">
                Package Id :
            </div>
            <div class="col-sm-9">
                <input name="packageId" id="packageId" class="form-control" placeholder="P001" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Package Category :
            </div>
            <div class="col-sm-9">
                <input id="packageCate" name="packageCate" class="form-control">
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-sm-3">
                Package Type :
            </div>
            <div class="col-sm-9">
                <input id="packageType" name="packageType" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Hotel Name :
            </div>
            <div class="col-sm-9">
                <select class="form-control"></select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Transpotation :
            </div>
            <div class="col-sm-9">
                <select class="form-control"></select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Guide Name :
            </div>
            <div class="col-sm-9">
                <select class="form-control"></select>
            </div>
        </div>
        <br>





        <button id="btnsavePack" class="btn btn-primary" type="submit">Save Pack</button>
    </div>
    <div class="col-sm-1"></div>


</section>


<br>
<?php
require "footer.php";
?>