

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
<br>
<section class="content-header">
    <h1>
        <!--        --><?//=$title?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Save Customer</a></li>
        <!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Customer Id :
            </div>
            <div class="col-sm-9">
                <input name="cid" id="cid" class="form-control" placeholder="C001">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Customer Name :
            </div>
            <div class="col-sm-9">
                <input name="cname" id="cname" class="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                E-mail :
            </div>
            <div class="col-sm-9">
                <input id="email " name="email " class="form-control" type="email">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Contact Number :
            </div>
            <div class="col-sm-9">
                <input id="ccontact " name="ccontact " class="form-control" type="tel">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Address :
            </div>
            <div class="col-sm-9">
                <input id="caddrerss " name="caddrerss " class="form-control" >
            </div>
        </div>
        <br>



        <div>
            <button id="btnAdd" class="btn btn-primary" type="submit">Save Customer</button>
        </div>
        <br>
        <br>
    </div>
    <div class="col-sm-1"></div>


</section>

<br>
<br>
<br>

<?php
require "footer.php";
?>