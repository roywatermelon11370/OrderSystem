<?php 
include("../assets/wfcart.php");
include("../connMysql.php");
session_start();
?>

<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <title>訂餐系統 - 購物車</title>
    <?php require_once("../head.html") ?>
</head>
<body class="bg-light">
    <?php require_once('../navbar.php') ?>
    <div class="container full-height">
        <div class="pb-3 px-2 pt-4 text-dark">
            <h4><span class="mdi mdi-cart-outline text-primary"></span> 購物車</h4>
        </div>

        <div class="bg-white p-3 rounded">
            
        </div>
    </div>

    <?php require_once("../footer.html") ?>
</body>
</html>