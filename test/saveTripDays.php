

<?php
require "headerAdmin.php";
?>
<br>
<br>
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
        <li><a href="ManageTripDays.php" "><i class="fa fa-dashboard"></i> Save Trip Days</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Day Id :
            </div>
            <div class="col-sm-9">
                <input name="txtOID" id="txtOID" class="form-control" placeholder="D001">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Day Type :
            </div>
            <div class="col-sm-9">
                <input name="txtOID" id="txtOID" class="form-control" placeholder="2-3 days" >
            </div>
        </div>
        <br>









        <button id="btnsave" class="btn btn-primary" type="submit">Save DayCount</button>
    </div>
    <div class="col-sm-1"></div>


</section>

<br>
<br>
<br>


<?php
require "footer.php";
?>