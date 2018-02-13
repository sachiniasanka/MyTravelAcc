

<?php
require "header.php";
?>


<section class="content-header">
    <h1>
<!--        --><?//=$title?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a //href="index1.php"><i class="fa fa-dashboard"></i> Customer Form</a></li>
<!--        <li class="active">--><?//=$title?><!--</li>-->
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Customer Name :
            </div>
            <div class="col-sm-9">
                <input name="txtOID" id="txtOID" class="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
              E-mail Address :
            </div>
            <div class="col-sm-9">
                <input id="orderDate" name="orderDate" class="form-control" type="email">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Contact Number :
            </div>
            <div class="col-sm-9">
                <input id="orderDate" name="orderDate" class="form-control" type="tel">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Address :
            </div>
            <div class="col-sm-9">
                <input id="orderDate" name="orderDate" class="form-control" >
            </div>
        </div>
        <br>





        <div class="row">
            <div class="col-sm-3">
                Inquiry ...
            </div>

        </div>
        <div class="row">
            <area class="form-control">
            Special Notes here ...

        </div>

        <br>




                <button  type="button" id="btnPlaceOrder" class="btn bg-gray-active">Submite</button>
            </div>
            <div class="col-sm-1"></div>


</section>



<?php
require "footer.php";
?>