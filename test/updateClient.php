<?php
$customerID = $_GET["cid"];
$customerName = $_GET["cname"];
$customerEmail=$_GET["email"];
$customerAddress = $_GET["caddress"];
$customerContact=$_GET["ccontact"];
?>
<?php
include "headerAdmin.php";
?>

    <!--            <div class="row">-->
    <!--                <section class="col-lg-5 connectedSortable">-->
    <section class="invoice">
        <div class="form-group">
            <label>Customer ID</label>
            <input type="text" class="form-control" id="cid" value=<?=$customerID?> name="cid" readonly>
        </div>
        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" class="form-control" id="cname" value=<?=$customerName?> name="cname">
        </div>
        <div class="form-group">
            <label>Customer E-mail</label>
            <input type="text" class="form-control" id="email" value=<?=$customerEmail?> name="email">
        </div>
        <div class="form-group">
            <label>Customer Contact</label>
            <input type="text" class="form-control" id="ccontact" value=<?=$customerContact?> name="ccontact">
        </div>
        <div class="form-group">
            <label>Customer Address</label>
            <input type="text" class="form-control" id="caddress" value=<?=$customerAddress?>  name="caddress">
        </div>
        <div>
            <button id="btnupdatecust" class="btn btn-primary" type="submit">Update Customer</button>
        </div>
    </section>
<?php
include "footer.php";
?>