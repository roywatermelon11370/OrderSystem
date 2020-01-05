<?php 
    session_start();
    include("../connMysql.php");
    if($_SESSION["memberLevel"] != "store") {
        header('location: ../index.html');
    }
    $query_InfoBind = "SELECT `name`, `username`, `passwd`, `email`, `address`, `gender`, `phone`, `birthday`, `level`, `note` FROM `profile` WHERE `username`=?";
	$stmt=$db_link->prepare($query_InfoBind);
	$stmt->bind_param("s", $_SESSION["loginMember"]);
  	$stmt->execute();
	$stmt->bind_result($name, $username, $passwd, $email, $address, $gender, $phone, $birthday, $level, $note);	
	$stmt->fetch();
	$stmt->close();

?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>訂餐系統 - 控制台</title>
    <?php require_once("../head.html") ?>
</head>

<body id="body" class="bg-light">

<nav id="navbar" class="navbar navbar-expand-sm navbar-light fixed-top">
        <a class="navbar-brand" href="">訂餐系統</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="../dishes/main.php"><span class="mdi mdi-home-outline"></span> 首頁</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                
            </ul>
        </div>
    </nav>
    
    <div>
        <div class="row">
            <div class="col-md-3 col-sm-12 side-menu sticky-top" style="top: 4.25rem;">

                <div class="nav nav-pills flex-column" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <h6 class="text-secondary py-2 pl-3">控制台</h6>
                    <a class="nav-link active " id="v-pills-profile-tab" data-toggle="pill" href="#l-profile" role="tab"
                        aria-controls="v-pills-profile" aria-selected="true"><span
                            class="mdi mdi-account-circle"></span>
                        個人資料</a>
                    <a class="nav-link" id="v-pills-coupon-tab" data-toggle="pill" href="#l-coupon" role="tab"
                        aria-controls="v-pills-coupon" aria-selected="false"><span
                            class="mdi mdi-ticket-percent"></span> 優惠券</a>
                    <a class="nav-link" id="v-pills-history-tab" data-toggle="pill" href="#l-history" role="tab"
                        aria-controls="v-pills-history" aria-selected="false"><span
                            class="mdi mdi-clock-outline"></span> 購餐歷史</a>
                    <a class="nav-link" id="v-pills-edit-tab" data-toggle="pill" href="#l-edit" role="tab"
                        aria-controls="v-pills-edit" aria-selected="false"><span class="mdi mdi-pencil"></span>
                        編輯資料</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false"><span class="mdi mdi-settings"></span>
                        偏好設定</a>
                    <a href="../logout.php" class="nav-link text-secondary mt-2"><span class="mdi mdi-logout"></span>
                        登出</a>
                </div>

            </div>
            <div class="col-md-9 col-sm-12 main-area bg-white">
                <div class="tab-content full-height" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="l-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <?php require_once("profile.php"); ?>
                    </div>
                    <div class="tab-pane fade" id="l-coupon" role="tabpanel" aria-labelledby="v-pills-coupon-tab">
                        <?php require_once("coupon.php"); ?>
                    </div>
                    <div class="tab-pane fade" id="l-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                        <?php require_once("history.php"); ?>
                    </div>
                    <div class="tab-pane fade" id="l-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        <?php require_once("edit.php") ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab"><?php require_once("settings.php") ?></div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../footer.html"); ?>
</body>