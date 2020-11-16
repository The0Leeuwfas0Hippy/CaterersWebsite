<?php
    require ('C:\dolibarr\www/WIL_Web20/public/php_scripts/DB_Connect.php');

    $PurchaseQuatity = $_POST['PurchaseQuantity_Specification'];
    $UserPurchase_AddOn = $_POST['UserAddOn'];
    $PurchaseDeliveryAddress = $_POST['PurchaseDeliveryAddress'];
    $EventDate = $_POST['PurchaseDeliveryDate'];

    $RecordPurchase = "INSERT INTO tbl_Order (Quantity, DeliveryDate, DeliveryAddress, UserPreferences)"
?>