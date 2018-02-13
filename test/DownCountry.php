
<?php
require "header.php";
?>

<div class="main showcase-page">
    <section class="module-extra-small bg-dark">
        <div class="container">
            <div class="row">
                <!--                <div class="col-sm-6 col-md-8 col-lg-9">-->
                <!--                    <div class="callout-text font-alt">-->
                <!--                        <h4 style="margin-top: 0px; font-; margin-left: 420px">Packages</h4>-->
                <!--<!--                        <p style="margin-bottom: 0px;">Download Titan Free today!</p>-->-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-sm-6 col-md-4 col-lg-3">-->
                <!--                                        <div class="callout-btn-box"><a class="btn btn-border-w btn-circle" href="https://themewagon.com/themes/titan/">Downlaod Free</a></div>-->
                <!--                </div>-->
            </div>
        </div>
    </section>


    <section class="module-medium" id="demos">
        <div class="container">
            <div class="row multi-columns-row">
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" //href="index_mp_fullscreen_video_background.html">
                    <div class="content-box-image"><img src="assets/images/screenshots/sinharaja.png" alt="Main Demo"></div>
                    <h3 class="content-box-title font-serif">Sinharaja Rain Forest </h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" //href="index_agency.html">
                    <div class="content-box-image"><img src="assets/images/screenshots/yala.png" alt="Agency"></div>
                    <h3 class="content-box-title font-serif">Yala Nation Park</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" //href="index_portfolio.html">
                    <div class="content-box-image"><img src="assets/images/screenshots/hikkaduwa.png" alt="Portfolio"></div>
                    <h3 class="content-box-title font-serif">Hikkaduwa Beach</h3></a></div>

                <!--            <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" //href="index_finance.html">-->
                <!--                <div class="content-box-image"><img src="assets/images/screenshots/jaffnaFort.jpg" alt="Finance"></div>-->
                <!--                <h3 class="content-box-title font-serif">Fort , Jaffna</h3></a></div>-->
                <!--            <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" //href="index_landing.html">-->
                <!--                <div class="content-box-image"><img src="assets/images/screenshots/Kovil%20Nallur.jpg" alt="Landing"></div>-->
                <!--                <h3 class="content-box-title font-serif">Nallur Kovil , Jaffna</h3></a></div>-->

            </div>
        </div>
    </section>

    <section class="invoice">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    Category :
                </div>
                <div class="col-sm-9">
                    <select class="form-control"></select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Package :
                </div>
                <div class="col-sm-9">
                    <input class="form-control"  readonly = "readonly">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Package Type :
                </div>
                <div class="col-sm-9">
                    <select class="form-control">2-3 days , 5-7 days</select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Travel To :
                </div>
                <div class="col-sm-9">
                    <area class="form-control" readonly="readonly">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Hotel :
                </div>
                <div class="col-sm-9">
                    <area class="form-control" readonly="readonly">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Vehical Type :
                </div>
                <div class="col-sm-9">
                    <select class="form-control"></select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Travellers :
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
            </div>
            <br>
            <!--            <div class="row">-->
            <!--                <div class="col-sm-3">-->
            <!--                    Package List :-->
            <!--                </div>-->
            <!--                <div class="col-sm-9">-->
            <!--                    <select class="form-control">Package-1,Package-2,Package-3</select>-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="row">
                <div class="col-sm-3">
                    Check In :
                </div>
                <div class="col-sm-9">
                    <input id="orderDate" name="orderDate" class="form-control" type="date" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    Check Out :
                </div>
                <div class="col-sm-9">
                    <input id="orderDate" name="orderDate" class="form-control" type="date" >
                </div>
            </div>
            <br>






            <div  class="col-sm-4">

                <button  type="button" id="btnPlaceOrder" class="btn bg-gray-active"><a href="LoginClinet.php">Confirm</a></button>
            </div>
            <div class="col-sm-1"></div>


    </section>

<?php
require "footer.php";
?>