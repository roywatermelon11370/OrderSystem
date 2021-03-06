<div class="bg-primary text-white main-area-header">
  <div class="col-md-10 col-sm-12">
  <div>
    <h3 class="decor-title-white">個人資料</h3>
  </div>
  <div>
    <ul class="nav">
      
    </ul>
  </div>
  </div>
</div>

<div class="actionbar sticky-top">
  <div class="col-md-10 col-sm-12">
    <div class="actionbar-title">
     <h5 class="mb-0">個人資料</h5>
    </div>

    <div>

    </div>
  </div>
</div>

<div class="row">
<div class="p-3 col-md-10 col-sm-12">
    <div class="profile-grid">
        <div class="profile-card-1 bg-light rounded p-3">
            <img src="../assets/images/royhuang/profile.png" alt="" class="bg-dark profile-img rounded">
            <div class="pt-3">
                <h5><?php echo $_SESSION["memberName"];?></h5>
                <p class="text-secondary">
                    ID: <?php echo $_SESSION["loginMember"];?> <br>
                    Email: <?php echo $email?>
                </p>
            </div>
        </div>
        <div class="profile-card-2 bg-light rounded p-3 text-secondary">
          <p><span class="mdi mdi-information"></span> 更多資料</p>
          <p>
            地址: <?php if(isset($address) && $address!="") echo $address; else echo "尚未設定"; ?> <br>
            電話: <?php if(isset($phone) && $phone!="") echo $phone; else echo "尚未設定"; ?> <br>
            生日: <?php if(isset($birthday) && $birthday!="0000-00-00") echo $birthday; else echo "尚未設定"; ?> <br>
          </p>
        </div>
        <div class="profile-card-3 bg-warning rounded p-3 text-white">
          <p><span class="mdi mdi-clock-outline"></span> 購餐紀錄</p>
          <p class="h1">$ 678</p>
          <p class="sub-descrp">你總共訂購過10次，共花了$678</p>
        </div>
        <div class="profile-card-4 bg-info rounded p-3 text-white">
          <p><span class="mdi mdi-ticket-percent"></span> 優惠券</p>
          <p class="h1">尚未開放</p>
          <p class="sub-descrp">敬請期待</p>
        </div>
    </div>
</div>
</div>