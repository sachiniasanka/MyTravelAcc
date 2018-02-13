
$("#btnNewCustomer").click(function () {
    $("#frmCustomer").attr("action","ManageClients.php?title=Manage Clients");
    $("#frmCustomer").submit();
});
$("#btnAdd").click(function () {

    // var custID = $("#txtCustomerID").val();
    //
    // var name = $("#txtCustomerName").val();
    //
    // var address = $("#txtCustomerAddress").val();
    //
    // if (custID.trim().length === 0) {
    //     $("#txtCustomerID").focus();
    //     $("#txtCustomerID").addClass("error");
    //     return;
    // } else {
    //     $("#txtCustomerID").removeClass("error");
    // }
    //
    // if (name.trim().length === 0) {
    //     $("#txtCustomerName").focus();
    //     $("#txtCustomerName").addClass("error");
    //     return;
    // } else {
    //     $("#txtCustomerName").removeClass("error");
    // }
    //
    // if (address.trim().length === 0) {
    //     $("#txtCustomerAddress").focus();
    //     $("#txtCustomerAddress").addClass("error");
    //     return;
    // } else {
    //     $("#txtCustomerAddress").removeClass("error");
    // }

    $("#frmCustomer").attr("action","saveC.php");
    $("#frmCustomer").submit();
});
$("#btnupdatecust").click(function () {
    $("#frmCustomer").attr("action","updateC.php");
    $("#frmCustomer").submit();
});
$("#btnDelete").click(function () {
    $("#frmCustomer").attr("action","deleteCustomer.php");
    $("#frmCustomer").submit();
});
/////////////////////////////item///////////////////////////////////////////////

$("#btnNewPlace").click(function () {
    $("#frmPlace").attr("action","SavePlace.php?title=Manage Place");
    $("#frmPlace").submit();
});
$("#btnsaveplace").click(function () {
    $("#frmPlace").attr("action","savePl.php");
    $("#frmPlace").submit();
});
$("#btnupdateplace").click(function () {
    $("#frmPlace").attr("action","updatePlace.php");
    $("#frmPlace").submit();
});
$("#btnDeleteplace").click(function () {
    $("#frmPlace").attr("action","deleteitem.php");
    $("#frmPlace").submit();
});

////////////////////////////////////////////////////////////////////////////////////

var ftotal=0;
$("#btnAdd").click(function(){

    console.log("gfbfgb");

    var orderID = $("#txtOID").val();

    var orderDate = $("#orderDate").val();

    var customerName = $("#custName").val();

    var itemCode = $("#cmbItem1").val();

    var cid=$("#combo").val();

    var description = $("#description").val();

    var unitPrice = $("#price").val();

    var qtyOnHand = $("#qtyOnHand").val();

    var qty = $("#qtyOrdered").val();

    var regExpOrderID = /^[O|o]\d{3}$/;


    var price;

    price=qty*unitPrice;


    if (!regExpOrderID.test(orderID)) {
        console.log("dgfdfgdfg");
        $("#txtOID").focus();
        $("#txtOID").addClass("error");
        return;

    } else {
        $("#txtOID").removeClass("error");
    }

    if (orderDate.trim().length === 0) {
        $("#orderDate").focus();
        $("#orderDate").addClass("error");
        return;

    } else {
        $("#orderDate").removeClass("error");
    }

    if (customerName.trim().length === 0) {
        $("#custName").focus();
        $("#custName").addClass("error");
        return;
    } else {
        $("#custName").removeClass("error");
    }

    if (description.trim().length === 0) {
        $("#description").focus();
        $("#description").addClass("error");
        return;
    } else {
        $("#description").removeClass("error");
    }

    if (qty.trim().length === 0) {
        $("#qtyOrdered").focus();
        $("#qtyOrdered").addClass("error");
        return;
    } else {
        $("#qtyOrdered").removeClass("error");
    }


    $("#tableN tbody").append('<tr>' +
        '<td>' + itemCode + ' </td>' +
        '<td>' + description + '</td>' +
        '<td>' + unitPrice + '</td>' +
        '<td>' + qty + '</td>' +
        '<td>' + price + '</td>' +
        '<td><div class="recycle"></div></td>' +
        '</tr>');

    ftotal=ftotal+price;

    $("#finalTotal").val(ftotal);

    $(".recycle").click(function(){
        console.log("sdfsdf");
        var row = $(this).parents("tr");
        row.fadeOut(500);
        setTimeout(function(){
            $(row).remove();
            ftotal=ftotal-price;
            $("#finalTotal").val(ftotal);
        },300);

    });

    $("#description").val("");
    $("#qtyOnHand").val("");
    $("#price").val("");
    $("#qtyOrdered").val("");

});
///////////////////////////users/////////////////////////////////////////////

$("#btu").click(function () {
    $("#frmMain").attr("action","login-user.php");
    $("#frmMain").submit();
});
$("#btus").click(function () {
    $("#frmLoginUser").attr("action","login.php");
    $("#frmLoginUser").submit();
});
$("#bta").click(function () {
    $("#frmMain").attr("action","sign-user.php");
    $("#frmMain").submit();
});
$("#bt").click(function () {
    $("#frmLogin").attr("action","sign.php");
    $("#frmLogin").submit();
});