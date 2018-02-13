<?php
include "headerAdmin.php";
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <
    <!--            <div class="row">-->
    <!--                <section class="col-lg-5 connectedSortable">-->
    <section class="invoice">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    Package ID
                </div>
                <div class="col-sm-9">
                    <input name="txtOID" id="txtOID" class="form-control" placeholder="P001">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Package Category
                </div>
                <div class="col-sm-9">
                    <input id="orderDate" name="orderDate" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Package Type
                </div>
                <div class="col-sm-9">
                    <input id="orderDate" name="orderDate" class="form-control">


                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Hotel Name
                </div>
                <div class="col-sm-9">
                    <select class="form-control"></select>


                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Hotel Cost
                </div>
                <div class="col-sm-9">
                   <input class="form-control">


                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Transportation Type
                </div>
                <div class="col-sm-9">
                    <select class="form-control"></select>


                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Transport Cost
                </div>
                <div class="col-sm-9">
                    <input class="form-control">


                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Guide Name
                </div>
                <div class="col-sm-9">
                    <select class="form-control"></select>


                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Guide Cost
                </div>
                <div class="col-sm-9">
                    <input class="form-control">


                </div>
            </div>
            <br>









            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn bg-blue-active" style="border-color: black" id="btnAdd">ADD TO TABLE</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-active" id="tableN">
                        <thead style="background-color: #001F3F;color: white">
                        <tr>
                            <th>PackId</th>
                            <th>PackCate</th>
                            <th>PackType</th>
                            <th>HotelCost</th>
                            <th>TransportCost</th>
                            <th>GuideCost</th>


                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    Package Price
                </div>

                <div class="col-sm-3">
                    <input class="form-control">
                </div>
                <div class="col-sm-1">
                    <button type="button" id="btnPlaceOrder" class="btn bg-gray-active">Confrim</button>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </section>
<br>
<br>
<?php
include "footer.php";
?>