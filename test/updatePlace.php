<?php
$placeCate = $_GET["placeCate"];
$placeName = $_GET["placeName"];


?>
<?php
include "headerAdmin.php";
?>

    <!--            <div class="row">-->
    <!--                <section class="col-lg-5 connectedSortable">-->
    <section class="invoice">
        <div class="form-group">
            <label>Place Cate</label>
            <input type="text" class="form-control" id="placeCate" value=<?=$placeCate?> name="placeCate" >
        </div>
        <div class="form-group">
            <label>Place Type</label>
            <input type="text" class="form-control" id="placeName" value=<?=$placeName?> name="placeName">
        </div>
        <>

        <div>
            <button id="btnupdateplace" class="btn btn-primary" type="submit">Update place</button>
        </div>
    </section>
<?php
include "footer.php";
?>