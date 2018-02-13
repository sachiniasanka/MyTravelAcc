

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
        <li><a href="ManageGuide.php"><i class="fa fa-dashboard"></i> Save Guide</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Guide Id :
            </div>
            <div class="col-sm-9">
                <input name="custid" id="custid" class="form-control" placeholder="G001">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Guide Name :
            </div>
            <div class="col-sm-9">
                <input name="name" id="name" class="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Guide NIC :
            </div>
            <div class="col-sm-9">
                <input id="mail" name="mail" class="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Guide Contact :
            </div>
            <div class="col-sm-9">
                <input id="cNum" name="cNum" class="form-control" type="tel">
            </div>
        </div>
        <br>
        <br>


        <div>
            <button id="btnsave" class="btn btn-primary" type="submit">Save Guide</button>
        </div>
        <br>
        <br>
    </div>
    <div class="col-sm-1"></div>


</section>



<?php
require "footer.php";
?>