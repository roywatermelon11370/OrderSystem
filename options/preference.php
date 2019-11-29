<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>訂餐系統 - 偏好設定</title>
    <!-- 連結Bootstrap.min.css -->
    <link rel="stylesheet" type='text/css' href="../assets/css/bootstrap.css" charset="UTF-8">
    <!-- 使用style.css -->
    <link rel="stylesheet" type='text/css' href="../assets/css/style.css" charset="UTF-8">
    <!-- 使用 material icons community-->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.0.96/css/materialdesignicons.min.css"
        crossorigin="anonymous">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:500,400&display=swap" rel="stylesheet">
    <!-- 連結Bootstrap所需要的js -->
    <!-- jquery.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- popper.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!-- bootstrap.min.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- 連結網頁主程式 -->
    <script src="../assets/js/main.js"></script>
</head>

<body class="bg-light">
    <nav id="navbar-normal" class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="">訂餐系統</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="main.html"><span class="mdi mdi-home-outline"></span> 首頁</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="cart.html"><span class="mdi mdi-cart-outline"></span> 購物車</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-3" data-toggle="dropdown" href="#"><span
                            class="mdi mdi-account-circle-outline"></span> 個人資料 <span
                            class="mdi mdi-chevron-down"></span></a>
                    <div class="dropdown-menu dropdown-menu-right borderless">
                        <a class="dropdown-item" href="#">
                            <div class="drop-profile-area">
                                <img src="../assets/images/royhuang/profile.png" alt="">
                                <div class="drop-profile-area-text">
                                    <h6>Roy Huang</h6>
                                    <p class="text-secondary text-small">royhuang111</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">購物歷史</a>
                        <a class="dropdown-item" href="#">設定</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">登出</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container p-2">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills sticky-top" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="top: 4.5rem;">
                    <P class="text-dark h6 pb-2 pl-2">偏好設定</P>
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#l-profile" role="tab"
                        aria-controls="v-pills-profile" aria-selected="true"><span class="mdi mdi-account-circle"></span>
                        個人資料</a>
                    <a class="nav-link" id="v-pills-history-tab" data-toggle="pill" href="#l-history" role="tab"
                        aria-controls="v-pills-history" aria-selected="false"><span
                            class="mdi mdi-clock-outline"></span> 購餐歷史</a>
                    <a class="nav-link" id="v-pills-edit-tab" data-toggle="pill" href="#l-edit" role="tab"
                        aria-controls="v-pills-edit" aria-selected="false"><span class="mdi mdi-pencil"></span>
                        編輯個人資料</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="l-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <?php require_once("profile.html"); ?>
                    </div>
                    <div class="tab-pane fade" id="l-history" role="tabpanel" aria-labelledby="v-pills-history-tab">...
                    </div>
                    <div class="tab-pane fade" id="l-edit" role="tabpanel"
                        aria-labelledby="v-pills-edit-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">...</div>
                </div>
            </div>
        </div>
    </div>
</body>