<?php 
    if(isset($_GET["logout"]) && $_GET["logout"] == "true") {
        unset($_SESSION["loginMember"]);
        unset($_SESSION["memberLevel"]);
        header("location: index.html");
    }
?>
<nav id="navbar-secondary" class="navbar navbar-expand-sm navbar-dark bg-primary sticky-top">
    <a class="navbar-brand" href="#">訂餐系統</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link px-3" href="main.php"><span class="mdi mdi-home-outline"></span> 首頁</a>
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
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="../options/dashboard.php">
                        <div class="drop-profile-area">
                            <img src="../assets/images/royhuang/profile.png" alt="">
                            <div class="drop-profile-area-text">
                                <h6>Roy Huang</h6>
                                <p class="text-secondary text-small"></p>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../options/dashboard.php">控制台</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="../navbar.php?logout=true">登出</a>
                </div>
            </li>
        </ul>
    </div>
</nav>