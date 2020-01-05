<?php 
session_start();
include('../connMysql.php');
if(!isset($_SESSION['memberLevel'])) {
    header('Location: ../index.html');
}
$query_InfoBind = "SELECT  `passwd` FROM `profile` WHERE `username`=?";
$stmt=$db_link->prepare($query_InfoBind);
$stmt->bind_param("s", $_SESSION["loginMember"]);
$stmt->execute();
$stmt->bind_result($passwd);	
$stmt->fetch();
$stmt->close();
if(isset($_POST['action'])&&$_POST['action']=='change') {
    if(!password_verify($_POST['oripassword'],$passwd)) {
        header("Location: changepwd.php?msg=1");
    }
    else if($_POST['newpassword']!=$_POST['passwordagain']) {
        header('Location: changepwd.php?msg=2');
    }
    else {
        $hashpwd=password_hash($_POST['newpassword'],PASSWORD_DEFAULT);
        $edit_query = "UPDATE `profile` SET `passwd` = ? WHERE `username`=?";
        $stmt = $db_link -> prepare($edit_query);
        $stmt -> bind_param('ss',$hashpwd,$_SESSION['loginMember']);
        $stmt -> execute();
        $stmt -> close();
        header('Location: changepwd.php?msg=7');
    }
}
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>修改密碼</title>
    <?php require_once("../head.html") ?>
</head>

<script>
$(document).ready(function() {
    var msg="<?php echo $_GET['msg']?>";
    if(msg=="1") {
        $('#oripassword').addClass('is-invalid');
        $('#oripwderr').text('密碼錯誤');
    }
    if(msg=="2") {
        $('#passwordagain,#newpassword').addClass('is-invalid');
        $('#pwdaerr').text('確認密碼錯誤');
    }
    if(msg=="7") {
        $('#form').remove();
    }

    $('#newpassword,#passwordagain').on('input propertychange', function() {
        var newcount=$('#newpassword').val().length;
        var againcount=$('#passwordagain').val().length;
        if(newcount<5) {
            $('#newpassword').addClass('is-invalid');
            $('#pwderr').text('密碼請輸入至少5個字元');
        } else {
            $('#newpassword').removeClass('is-invalid');
            $('#pwderr').text('');
        }

        if(againcount<5) {
            $('#passwordagain').addClass('is-invalid');
            $('#pwdaerr').text('密碼請輸入至少5個字元');
        } else {
            $('#passwordagain').removeClass('is-invalid');
            $('#pwdaerr').text('');
        }

        if(newcount<5||againcount<5) {
            $('#submit').click(function( event ) {
                event.preventDefault();
            });
        } else {
            $('#submit').unbind('click');
        }
    } );
});
</script>

<body class="bg">
    <div class="form-bg">
        <div class="form-card rounded bg-white">
            <div>
                <h4 class="text-dark mb-4"><span class="mdi mdi-key-outline text-primary"></span> 修改密碼</h4>
            </div>
            <form id="form" name="changepwd" method="post" action="" class="text-left py-2">
                <div class="d-flex">
                    <span class="mdi mdi-key text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="oripassword" id="oripassword" type="password" class="form-control" placeholder="原密碼*">
                        <p id="oripwderr" class="text-danger mb-0"></p>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="mdi mdi-key text-secondary form-icon"></span>
                    <div class="my-2 w-100">
                        <input name="newpassword" id="newpassword" type="password" class="form-control" placeholder="新密碼*">
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
                <div class="text-center justify-content-end d-flex pt-2">
                    <button type="button" onclick="history.back()" class="btn btn-light mr-3">取消</button>
                    <input type="hidden" name="action" value="change">
                    <button type="submit" class="btn btn-primary">確定</button>
                </div>
            </form>
            <?php 
                if(isset($_GET['msg'])&&$_GET['msg']==7) {
                    echo '<div class="text-center">
                    <p class="text-success mdi mdi-check-circle-outline display-3 mb-0"></p>
                    <p class="h5 mb-3">密碼修改成功</p>
                    <a href="dashboard.php" class="btn btn-primary">確定</a>
                </div>';
                }
            ?>
        </div>
    </div>
</body>