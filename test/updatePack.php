<?php
$packId = $_GET["packageId"];
$packCate = $_GET["packageCate"];
$packType = $_GET["packageType"];

?>
<?php
include "headerAdmin.php";
?>

    <!--            <div class="row">-->
    <!--                <section class="col-lg-5 connectedSortable">-->
    <section class="invoice">
        <div class="form-group">
            <label>pack Id</label>
            <input type="text" class="form-control" id="packageId" value=<?=$packId?> name="packageId" >
        </div>
        <div class="form-group">
            <label>pack Cate</label>
            <input type="text" class="form-control" id="packageCate" value=<?=$packCate?> name="packageCate">
        </div>
        <div class="form-group">
            <label>pack Type</label>
            <input type="text" class="form-control" id="packageType" value=<?=$packType?> name="packageType">
        </div>

        <div>
            <button id="btnupdateI" class="btn btn-primary" type="submit">Update Pack</button>
        </div>
    </section>
<?php
include "footer.php";
?>