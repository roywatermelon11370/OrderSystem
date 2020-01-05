<?php 
    include("../connMysql.php");
    if(isset($_POST["action"]) && $_POST["action"]=="add") {
        $query_row_number = "SELECT `id` FROM `profile`";
        $sql_row_number = $db_link -> query($query_row_number);
        $row_number = $sql_row_number->num_rows;
        $id = $row_number+1;
        $query_find_user = "SELECT `username` FROM `profile` WHERE username='{$_POST["username"]}'";
        $sql_find_user = $db_link->query($query_find_user);
        if($sql_find_user->num_rows>0) {
            header("Location: register.php?msg=3");
        }
        else {
            $store = "store";
            $pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $sql_query="INSERT INTO `profile` (`id`, `name`, `username`, `passwd`, `email`, `level`) VALUES (?,?,?,?,?,?)";
            $stmt = $db_link -> prepare($sql_query);
            $stmt -> bind_param("isssss" ,$id , $_POST["name"], $_POST["username"], $pwd, $_POST["email"], $store);
            $stmt -> execute();
            $stmt -> close();
            $db_link -> close();
            header("location: storereg.php?msg=7");
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
    $(document).ready(function () {
        $('#name,#username,#password,#passwordagain,#email').on('input propertychange', function() {
            var namecount = $('#name').val().length;
            var usernamecount = $('#username').val().length;
            var passwordcount = $('#password').val().length;
            var passwordagaincount = $('#passwordagain').val().length;
            var emailcount = $('#email').val().length;
            var pwd = $('#password').val();
            var pwda = $('#passwordagain').val();

            $('#name').click(function() {
                if(namecount == 0) {
                $('#name').addClass('is-invalid');
                $('#nameerr').text('請輸入姓名');
                } else {
                $('#name').removeClass('is-invalid');
                $('#nameerr').text('');
                }
            });

            $('#username').click(function() {
                if(usernamecount <5) {
                $('#username').addClass('is-invalid');
                $('#usernameerr').text('帳號長度至少要五個字元。');
                } else {
                $('#username').removeClass('is-invalid');
                $('#usernameerr').text('');
                }
            });

            $('#password').click(function() {
                if(passwordcount <5) {
                $('#password').addClass('is-invalid');
                $('#pwderr').text('密碼長度至少要五個字元');
                } else {
                $('#password').removeClass('is-invalid');
                $('#pwderr').text('');
                }
            });

            $('#passwordagain').click(function() {
                if(pwd != pwda) {
                $('#passwordagain').addClass('is-invalid');
                $('#pwdaerr').text('確認密碼與密碼不符');
                } else {
                $('#passwordagain').removeClass('is-invalid');
                $('#pwdaerr').text('');
                }
            });

            $('#email').click(function() {
                if(emailcount == 0) {
                $('#email').addClass('is-invalid');
                $('#emailerr').text('請輸入 Email');
                } else {
                $('#email').removeClass('is-invalid');
                $('#emailerr').text('');
                }
            });
            
            if(namecount == 0 || usernamecount <5 || passwordcount <5 || pwd != pwda || emailcount == 0) {
                $('#submit').click(function(event) {
                    event.preventDefault();
                });
            }
        });

        var msg = <?php echo $_GET['msg'] ?>;
        if(msg==3) {
            $('#username').addClass('is-invalid');
            $('#usernameerr').text('帳號已存在')
        }

        if(msg==7) {
            $('#form').remove();
        }
    } );
</script>

<body class="bg">
    <div class="form-bg">
        <div class="form-card rounded bg-white">
            <div>
                <h3 class="text-dark decor-title-primary mb-4">店家註冊</h3>
            </div>
            <form id="form" name="login" method="post" action="" class="text-left py-2">
                <div class="d-flex">
                    <span class="mdi mdi-store text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="name" id="name" type="text" class="form-control" placeholder="店家名稱*">
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
                <div class="d-flex">
                    <span class="mdi mdi-shape text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                    <select class="custom-select" required>
                        <option value="">店家類型*</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
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
</html>