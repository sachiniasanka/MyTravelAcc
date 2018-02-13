

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
        <li><a href="ManagePlace.php"><i class="fa fa-dashboard"></i> Save Place</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Place Category :
            </div>
            <div class="col-sm-9">
                <input name="placeCate" id="placeCate" class="form-control" placeholder="UP COUNTRY">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Place Name :
            </div>
            <div class="col-sm-9">
                <input name="placeName" id="placeName" class="form-control" placeholder="Jaffna" >
            </div>
        </div>
        <br>



        <br>


        <div>
            <button id="btnsaveplace" class="btn btn-primary" type="submit">Save Place</button>
        </div>
        <br>
        <br>
    </div>
    <div class="col-sm-1"></div>


</section>



<?php
require "footer.php";
?>