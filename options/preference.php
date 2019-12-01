<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>訂餐系統 - 偏好設定</title>
    <?php require_once("../head.html") ?>
</head>

<body class="bg-light">

    <?php require_once("navbar-secondary.php"); ?>
    <div class="container p-2">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="px-2 sticky-top" style="top: 4.25rem;">
                    <div class="nav row nav-pills sticky-top" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <h6 class="text-secondary py-2 pl-3 col-12">偏好設定</h6>
                        <a class="nav-link col-md-12 col-sm-3 active " id="v-pills-profile-tab" data-toggle="pill"
                            href="#l-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true"><span
                                class="mdi mdi-account-circle"></span>
                            個人資料</a>
                        <a class="nav-link col-md-12 col-sm-3" id="v-pills-history-tab" data-toggle="pill"
                            href="#l-history" role="tab" aria-controls="v-pills-history" aria-selected="false"><span
                                class="mdi mdi-clock-outline"></span> 購餐歷史</a>
                        <a class="nav-link col-md-12 col-sm-3" id="v-pills-edit-tab" data-toggle="pill" href="#l-edit"
                            role="tab" aria-controls="v-pills-edit" aria-selected="false"><span
                                class="mdi mdi-pencil"></span>
                            編輯資料</a>
                        <a class="nav-link col-md-12 col-sm-3" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false"><span class="mdi mdi-settings"></span> 更多設定</a>
                        <a href="" class="nav-link text-secondary mt-2 col-12"><span class="mdi mdi-logout"></span>
                            登出</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="tab-content full-height" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="l-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <?php require_once("profile.php"); ?>
                    </div>
                    <div class="tab-pane fade" id="l-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                        <?php require_once("history.php"); ?>
                    </div>
                    <div class="tab-pane fade" id="l-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        <?php require_once("edit.php") ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">...</div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../footer.html"); ?>
</body>