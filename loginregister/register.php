<?php 
    include("../connMysql.php");
    if(isset($_POST["action"]) && $_POST["action"]=="add") {
        $query_find_id = "SELECT `id` FROM `profile` ORDER BY `id` DESC";
        $find_id_result = mysqli_query($db_link , $query_find_id);
        mysqli_data_seek($find_id_result,mysqli_num_rows($find_id_result));
        $id_result=mysqli_fetch_assoc($find_id_result);
        $id=$id_result['id']+1;
        $query_find_user = "SELECT `username` FROM `profile` WHERE username='{$_POST["username"]}'";
        $sql_find_user = $db_link->query($query_find_user);
        if($sql_find_user->num_rows>0) {
            header("Location: register.php?msg=3");
        } else if($_POST['password']!=$_POST['passwordagain']) {
            header("Location: register.php?msg=5");
        } else {
            $customer = "customer";
            $pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $sql_query="INSERT INTO `profile` (`id`, `name`, `username`, `passwd`, `email`, `level`) VALUES (?,?,?,?,?,?)";
            $stmt = $db_link -> prepare($sql_query);
            $stmt -> bind_param("isssss" ,$id , $_POST["name"], $_POST["username"], $pwd, $_POST["email"], $customer);
            $stmt -> execute();
            $stmt -> close();
            $db_link -> close();
            header("location: register.php?msg=7");
        }
    }
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>訂餐系統-註冊</title>
    <?php require_once("../head.html"); ?>
</head>

<script>
    $(document).ready(function(){
        $('#name').on('input propertychange', function() {
            var count = $(this).val().length;
            if(count==0) {
                $('#name').addClass('is-invalid');
                $('#nameerr').text("請輸入姓名");
                $('#submit').click(function(event){
                    event.preventDefault();
                });
            } else {
                $('#name').removeClass('is-invalid');
                $('#nameerr').text("");
                $('#submit').unbind('click');
            }
        });

        $('#username').on('input propertychange', function() {
            var count = $(this).val().length;
            if(count<5) {
                $('#username').addClass('is-invalid');
                $('#usernameerr').text("帳號請輸入超過五個字元");
                $('#submit').click(function(event){
                    event.preventDefault();
                });
            } else {
                $('#username').removeClass('is-invalid');
                $('#usernameerr').text("");
                $('#submit').unbind('click');
            }
        });

        $('#password').on('input propertychange', function() {
            var count = $(this).val().length;
            if(count<5) {
                $('#password').addClass('is-invalid');
                $('#pwderr').text("密碼請輸入超過五個字元");
                $('#submit').click(function(event){
                    event.preventDefault();
                });
            } else {
                $('#password').removeClass('is-invalid');
                $('#pwderr').text("");
                $('#submit').unbind('click');
            }
        });

        $('#email').on('input propertychange', function() {
            var count = $(this).val().length;
            if(count==0) {
                $('#email').addClass('is-invalid');
                $('#emailerr').text("請輸入Email");
                $('#submit').click(function(event){
                    event.preventDefault();
                });
            } else {
                $('#email').removeClass('is-invalid');
                $('#emailerr').text("");
                $('#submit').unbind('click');
            }
        });

        $('#name,#username,#password,#email').on('input propertychange', function() {
            var namecount=$('#name').val().length;
            var usernamecount=$('#username').val().length;
            var passwordcount=$('#password').val().length;
            var emailcount=$('#email').val().length;

            if(namecount==0 || usernamecount<5 || passwordcount<5 || emailcount==0) {
                $('#submit').click(function( event ) {
                    event.preventDefault();
                });
            } else {
                $('#submit').unbind('click');
            }
        });

        var msg="<?php echo $_GET['msg'] ?>";
        if(msg==3) {
            $('#username').addClass('is-invalid');
            $('#usernameerr').text('此帳號已存在，請換一個帳號')
        }

        if(msg==5) {
            $('#password').addClass('is-invalid');
            $('#pwdaerr').text('確認密碼錯誤')
        }

        if(msg==7) {
            $('#form').remove();
        }
    });
</script>

<body class="bg">
    <div class="form-bg">
        <div class="form-card rounded bg-white">
            <div>
                <div class="form-circle bg-primary text-center">
                    <span class="mdi mdi-account-plus-outline"></span>
                </div>
                <h4 class="text-dark text-center mb-1 mt-5">註冊</h4>
            </div>
            <form id="form" name="login" method="post" action="" class="text-left py-2">
                <div class="d-flex">
                    <span class="mdi mdi-face text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="name" id="name" type="text" class="form-control" placeholder="姓名*">
                        <p id="nameerr" class="text-danger mb-0"></p>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="mdi mdi-account-circle text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="username" id="username" type="text" class="form-control" placeholder="帳號*">
                        <p id="usernameerr" class="text-danger mb-0"></p>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="mdi mdi-key text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="password" id="password" type="password" class="form-control" placeholder="密碼*">
                        <p id="pwderr" class="text-danger mb-0"></p>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="mdi mdi-key-plus text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="passwordagain" id="passwordagain" type="password" class="form-control" placeholder="確認密碼*">
                        <p id="pwdaerr" class="text-danger mb-0"></p>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="mdi mdi-email-open text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="email" id="email" type="text" class="form-control"
                        placeholder="Email*">
                        <p id="emailerr" class="text-danger mb-0"></p>
                    </div>
                </div>
                <p class="text-primary"><span class="mdi mdi-information-outline"></span> 其他資料可在登入後編輯</p>
                <div>
                    <input name="action" type="hidden" value="add">
                    <button id="submit" type="submit" class="btn btn-primary btn-block">註冊</button>
                </div>
            </form>
            <?php 
                if(isset($_GET['msg'])&&$_GET['msg']==7) {
                    echo '<div class="text-center">
                    <p class="text-success mdi mdi-check-circle-outline display-3 mb-0"></p>
                    <p class="h5 mb-3">註冊成功</p>
                    <a href="loginpage.php" class="btn btn-primary">登入</a>
                </div>';
                }
            ?>
        </div>
    </div>
</body>