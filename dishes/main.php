<?php 
  session_start();
  if($_SESSION["memberLevel"] != "customer") {
    header('location: ../index.html');
  }
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <title>訂餐系統</title>
  <?php require_once("../head.html"); ?>
</head>

<body id="body" class="bg-light">
  <?php require_once("../navbar.php") ?>

  <div class="container full-height">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <div class="nav flex-column sticky-top" style="top:4rem">
          <div class="nav-link">
          <form name="search" action="" method="get" class="d-flex search-bar">
            <input type="text" class="form-control searchbar-input" placeholder="搜尋">
            <button type="submit" class="btn searchbar-btn"><span class="mdi mdi-magnify"></span></button>
          </form>
          </div>
          <a class="nav-link" href="">所有料理</a>
          <a class="nav-link" href="">中華料理</a>
          <a class="nav-link" href="">日本料理</a>
          <a class="nav-link" href="">義式料理</a>
          <a class="nav-link" href="">美式料理</a>
          <a class="nav-link" href="">南洋料理</a>
          <a class="nav-link" href="">甜點、飲料</a>
          <a class="nav-link" href="">其他</a>
        </div>
      </div>

      <div class="col-md-9 col-sm-12 bg-white main-area">
        <!-- <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://picsum.photos/id/225/900/250" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>這是一壺好喝的茶</h5>
                  <p>我不知道要放什麼字。</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/id/431/900/250" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>這是一杯咖啡</h5>
                  <p>This is a cup of coffee.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div> -->

        <!-- list -->
        <div class="p-3">
          <h4 class="pl-3 pb-1 pt-3">所有料理</h4>
          <div class="row">
            <a href="store.php" class="col-md-4 col-sm-12 text-black main-area-square-item py-3">
              <img src="https://picsum.photos/id/460/600/400" alt="" class="img-fluid rounded">
              <div class="p-2">
                <h5 class="text-dark">停雲館</h5>
                <p class="text-secondary">營業時間: 9:00-18:00</p>
              </div>
            </a>
            <a href="#" class="col-md-4 col-sm-12 text-black main-area-square-item py-3">
              <img src="https://picsum.photos/id/475/600/400" alt="" class="img-fluid rounded">
              <div class="p-2">
                <h5 class="text-dark">停雲館</h5>
                <p class="text-secondary">營業時間: 9:00-18:00</p>
              </div>
            </a>
            <a href="#" class="col-md-4 col-sm-12 text-black main-area-square-item py-3">
              <img src="https://picsum.photos/id/480/600/400" alt="" class="img-fluid rounded">
              <div class="p-2">
                <h5 class="text-dark">停雲館</h5>
                <p class="text-secondary">營業時間: 9:00-18:00</p>
              </div>
            </a>
            <a href="#" class="col-md-4 col-sm-12 text-black main-area-square-item py-3">
              <img src="https://picsum.photos/id/490/600/400" alt="" class="img-fluid rounded">
              <div class="p-2">
                <h5 class="text-dark">停雲館</h5>
                <p class="text-secondary">營業時間: 9:00-18:00</p>
              </div>
            </a>
          </div>
          <nav>
          <ul class="pagination justify-content-center mt-3">
            <li class="page-item">
              <a class="page-link" href="#" tabindex="-1">|<</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" tabindex="-1"><</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" tabindex="-1">></a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" tabindex="-1">>|</a>
            </li>
          </ul>
        </nav>
        </div>

 
      </div>
    </div>
  </div>

  <?php require_once("../footer.html") ?>
</body>