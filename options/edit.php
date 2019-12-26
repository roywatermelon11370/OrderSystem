<?php 
    if(isset($_POST['action'])&&$_POST['action']=='edit') {
        $edit_query = "UPDATE `profile` SET `name` = ?, `email` = ?, `address` = ?, `gender` = ?, `phone` = ?, `birthday` = ?, `note` = ? WHERE `profile`.`username` = ?";
        $stmt = $db_link -> prepare($edit_query);
        $stmt -> bind_param('ssssssss',$_POST['name'],$_POST['email'],$_POST['address'],$_POST['gender'],$_POST['phone'],$_POST['birthday'],$_POST['note'], $_POST['username']);
        $stmt -> execute();
        $stmt -> close();
        $db_link -> close();
        $_SESSION['memberName']=$_POST['name'];
        ?>
        <script>
            alert('修改成功!');
            window.location('dashboard.php');
        </script>
        <?php
    }
?>

<script>
    $(document).ready(function () {
        var gender = '<?php echo $gender?>';
        if(gender == "M") $('#male').attr("checked",true);
        if(gender == "F") $('#female').attr("checked",true);
        if(gender == "O") $('#other').attr("checked",true);
        $('#name,#email').on('input propertychange', function() {
            var namecount = $('#name').val().length;
            var emailcount = $('#email').val().length;
            if(namecount == 0) {
                $('#name').addClass('is-invalid');
                $('#nameerr').text('請輸入姓名');
            } else {
                $('#name').removeClass('is-invalid');
                $('#nameerr').text('');
            }
            if(emailcount == 0) {
                $('#email').addClass('is-invalid');
                $('#emailerr').text('請輸入 Email');
            } else {
                $('#email').removeClass('is-invalid');
                $('#emailerr').text('');
            }
            if(namecount == 0||emailcount == 0) {
                $('#submit').click(function(event) {
                    event.preventDefault();
                    $('html,body').stop().animate({
                    scrollTop: 0
                    }, 600, $.bez([0, 0.98, 0.58, 1]));
                });
            }
        });
    } );
</script>

<div class="bg-primary text-light main-area-header">
    <div class="col-md-10 col-sm-12">
        <div>
            <h3 class="decor-title-white">編輯個人資料</h3>
        </div>
        <div>
            <ul class="nav">

            </ul>
        </div>
    </div>
</div>

<div class="actionbar sticky-top">
    <div class="col-md-10 col-sm-12 actionbar-content">
        <div class="actionbar-title">
            <h5 class="mb-0">編輯個人資料</h5>
        </div>

        <div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="changepwd.php"><span class="mdi mdi-key"></span> 修改密碼</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="p-3 col-md-10 col-sm-12">
        <div class="bg-white card-bg rounded">
            <form name="login" method="post" action="" class="text-left">
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-face"> &nbsp;&nbsp;</span> 姓名
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input name="name" type="text" class="form-control" id="name" value="<?php echo $name?>" oninput="myFunction()">
                        <p id="nameerr" class="mb-0 text-danger"></p>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-account-circle"> &nbsp;&nbsp;</span> 帳號
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input name="username" type="text" class="form-control-plaintext" id="username" readonly value="<?php echo $_SESSION["loginMember"];?>">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-email-open"> &nbsp;&nbsp;</span> Email
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input name="email" type="text" class="form-control" id="email" value="<?php echo $email?>">
                        <p id="emailerr" class="mb-0 text-danger"></p>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-map-marker"> &nbsp;&nbsp;</span> 地址
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input name="address" type="text" class="form-control" id="address" value="<?php echo $address?>">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-gender-male-female"> &nbsp;&nbsp;</span> 性別
                    </div>
                    <div class="col-md-10 col-sm-12 form-text">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="male" name="gender" class="custom-control-input" value="M">
                            <label class="custom-control-label" for="male">男</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="female" name="gender" class="custom-control-input" value="F">
                            <label class="custom-control-label" for="female">女</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="other" name="gender" class="custom-control-input" value="O">
                            <label class="custom-control-label" for="other">其他或不願透露</label>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-phone"> &nbsp;&nbsp;</span> 電話
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $phone?>">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-cake"> &nbsp;&nbsp;</span> 生日
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input name="birthday" type="date" class="form-control" id="birthday" value="<?php echo $birthday?>">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-note-text"> &nbsp;&nbsp;</span> 備註
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <textarea name="note" type="text" class="form-control" id="note" rows="3"><?php echo $note?></textarea>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <button type="reset" class="btn btn-secondary mr-2">重填</button>
                    <input type="hidden" name="action" value="edit"> 
                    <button id="submit" type="submit" class="btn btn-primary">儲存</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editSuccess" tabindex="-1" role="dialog" aria-labelledby="editSuccessTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSuccessTitle">修改成功</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
            <p class="text-success mdi mdi-check-circle-outline display-3 mb-0"></p>
            <p class="h5 mb-3">註冊成功</p>
      </div>
      <div class="modal-footer">
        <a href="dashboard.php" class="btn btn-primary">確定</a>
      </div>
    </div>
  </div>
</div>