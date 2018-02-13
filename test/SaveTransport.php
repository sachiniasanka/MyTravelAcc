

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
        <li><a href="ManageTransportl.php"><i class="fa fa-dashboard"></i> Save Transport</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Transport Category :
            </div>
            <div class="col-sm-9">
                <input name="custid" id="custid" class="form-control" placeholder="UP COUNTRY">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Transport Type :
            </div>
            <div class="col-sm-9">
                <input name="name" id="name" class="form-control" placeholder="Van" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Transport Cost :
            </div>
            <div class="col-sm-9">
                <input id="mail" name="mail" class="form-control" >
            </div>
        </div>
        <br>



        <div>
            <button id="btnsave" class="btn btn-primary" type="submit">Save Transport</button>
        </div>
        <br>
        <br>
    </div>
    <div class="col-sm-1"></div>


</section>



<?php
require "footer.php";
?>