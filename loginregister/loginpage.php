<?php 
require_once("connMysql.php");
session_start();
if(isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"]!="")) {
    header("Location:../dishes/main.php")
}

?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>訂餐系統-登入</title>
    <?php require_once("../head.html"); ?>
</head>

<body class="bg">
    <div class="form-bg">
        <div class="form-card rounded bg-white">
            <div>
                <h3 class="text-dark decor-title-primary mb-4">登入</h3>
            </div>
            
            <form name="login" method="post" action="login.php" class="text-left py-2">
            <p class="d-flex">
                    <span class="mdi mdi-account-circle text-secondary form-icon"></span>
                    <input name="account" id="account" type="text" class="form-control" placeholder="帳號">
                </p>
                <p class="d-flex">
                    <span class="mdi mdi-key text-secondary form-icon"></span>
                    <input name="password" id="password" type="password" class="form-control" placeholder="密碼">
                </p>
                <div class="custom-control custom-checkbox">
                    <input name="rememberme" type="checkbox" id="rememberme" class="custom-control-input" value="true" checked>
                    <label class="custom-control-label" for="rememberme">記住我的帳號密碼</label>
                </div><br>
                <button type="submit" class="btn btn-primary btn-block">登入</button>
            </form>
            <p class="text-secondary">沒有帳號? <a href="registerpage.html">註冊</a></p>
        </div>
        
    </div>
</body>