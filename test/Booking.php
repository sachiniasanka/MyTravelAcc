<?php
include "headerAdmin.php";
?>

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
            Booking ID
        </div>
        <div class="col-sm-9">
            <input name="txtOID" id="txtOID" class="form-control" placeholder="B001">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            Cust Id
        </div>
        <div class="col-sm-9">
            <input id="orderDate" name="orderDate" class="form-control">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            Cust Name
        </div>
        <div class="col-sm-9">
            <input id="orderDate" name="orderDate" class="form-control">


        </div>
    </div>
    <br>
        <div class="row">
            <div class="col-sm-3">
                Pack Category
            </div>
            <div class="col-sm-9">
                <select class="form-control"></select>


            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Pack Type
            </div>
            <div class="col-sm-9">
                <select class="form-control"></select>


            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Travel To
            </div>
            <div class="col-sm-9">
                <select class="form-control"></select>


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
                Transportation Type
            </div>
            <div class="col-sm-9">
                <select class="form-control"></select>


            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-3">
                Count Of Travellers
            </div>

        </div>
        <div class="col-sm-9">
            <div class="col-xxs-12 col-xs-6 mt">
                <section>
                    <label for="class">Adults:</label>
                    <select class="cs-select cs-skin-border">
                        <option value="" disabled selected>1</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </section>
            </div>
            <div class="col-xxs-12 col-xs-6 mt">
                <section>
                    <label for="class">Children:</label>
                    <select class="cs-select cs-skin-border">
                        <option value="" disabled selected>1</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </section>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Check IN
            </div>
            <div class="col-sm-9">
                <input class="form-control" type="date">


            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Check OUT
            </div>
            <div class="col-sm-9">
                <input class="form-control" type="date">


            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Contact
            </div>
            <div class="col-sm-9">
                <input class="form-control" >


            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-3">
                Payment
            </div>
            <div class="col-sm-9">
                <input class="form-control" >


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
                    <th>BookingID</th>
                    <th>CustId</th>
                    <th>CustName</th>
                    <th>PackCate</th>
                    <th>PackType</th>
                    <th>Travel To</th>
                    <th>HotelName</th>
                    <th>TransportationType</th>
                    <th>CountOfTravellers</th>
                    <th>CheckIn</th>
                    <th>CheckOut</th>
                    <th>Contact</th>

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
        <div class="col-sm-1"></div>

        <div class="col-sm-5">
        </div>
        <div class="col-sm-1">
            <button type="button" id="btnPlaceOrder" class="btn bg-gray-active">Booking</button>
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