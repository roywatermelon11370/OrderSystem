<?php 
    session_start();
    include("../connMysql.php");
	$query_RecLogin = "SELECT  `passwd` FROM `profile` WHERE username=?";
	$stmt=$db_link->prepare($query_RecLogin);
	$stmt->bind_param("s", $_POST["username"]);
  	$stmt->execute();
	$stmt->bind_result($passwd);	
	$stmt->fetch();
	$stmt->close();
    if(isset($_POST["action"])&&$_POST["action"]=="delete") {
        if(!password_verify($_POST["password"],$passwd)) {
            header("Location: delaccount.php?msg=1");
        }
        if(password_verify($_POST["password"],$passwd)) {
            $query_delaccount = "DELETE FROM profile WHERE username=?";
            $stmt = $db_link->prepare($query_delaccount);
            $stmt -> bind_param("s",$_SESSION["loginMember"]);
            $stmt -> execute();
            $stmt -> close();
            header("Location: delaccount.php?msg=2");
        }
    }
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>刪除帳號</title>
    <?php require_once("../head.html");?>
</head>

<script type='text/javascript'>
    $(document).ready(function () {
        var msg=<?php echo $_GET["msg"] ?>;
        if(msg==1) {
            $('#password').addClass('is-invalid');
            $('#error').text("密碼錯誤，請再試一次。");
        }
        if(msg==2) {
            $('#delaccountForm').remove();
            $('#info').remove();
        }
    } );
</script>

<body class="bg">
    <div class="form-bg">
        <div class="form-card bg-white rounded">
            <h4><span class="mdi mdi-trash-can-outline text-danger"></span> 刪除帳號</h4>
            <p id="info" class="mb-0 mt-2 text-secondary">將帳號及相關資料全部刪除。<br>請注意，此動作<b class="text-danger">無法復原</b>。<br>請在底下輸入密碼以確認身分。</p>
            <form id="delaccountForm" name="delaccount" method="post" action="" class="text-left pt-4">
                <p id="error" class="text-danger text-center mb-0"></p>
                <p class="d-flex">
                    <span class="mdi mdi-account-circle text-secondary form-icon"></span>
                    <input name="username" id="username" type="text" class="form-control bg-white" placeholder="帳號" readonly value="<?php echo $_SESSION["loginMember"];?>">
                </p>
                <p class="d-flex">
                    <span class="mdi mdi-key text-secondary form-icon"></span>
                    <input name="password" id="password" type="password" class="form-control" placeholder="密碼">
                </p>
                <div class="text-right">
                    <button type="button" onclick="history.back()" class="btn btn-light mr-3">取消</button>
                    <input type="hidden" name="action" value="delete">
                    <button type="submit" class="btn btn-danger">刪除帳號</button>
                </div>
            </form>
            <?php 
                if(isset($_GET['msg'])&&$_GET['msg']==2) {
                    echo '<div class="text-center">
                    <p class="text-success mdi mdi-check-circle-outline display-3"></p>
                    <p class="h5 mb-3">刪除成功</p>
                    <a href="../logout.php" class="btn btn-primary">回到首頁</a>
                </div>';
                }
            ?>
        </div>
    </div>
</body>

</html>