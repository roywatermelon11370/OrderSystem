<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>修改密碼</title>
    <?php require_once("../head.html") ?>
</head>

<body class="bg">
    <div class="form-bg">
        <div class="form-card rounded bg-white">
            <div>
                <h3 class="text-dark">修改密碼</h3>
            </div>
            <form name="changepwd" method="post" action="changepwd-action.php" class="text-left py-2">
                <p class="d-flex">
                    <span class="mdi mdi-key text-secondary form-icon"></span>
                    <input name="password" id="oripassword" type="password" class="form-control" placeholder="原密碼">
                </p>
                <p class="d-flex">
                    <span class="mdi mdi-key text-secondary form-icon"></span>
                    <input name="password" id="newpassword" type="password" class="form-control" placeholder="新密碼">
                </p>
                <p class="d-flex">
                    <span class="mdi mdi-key-plus text-secondary form-icon"></span>
                    <input name="passwordagain" id="passwordagain" type="password" class="form-control"
                        placeholder="確認密碼">
                </p>
                    <button type="submit" class="btn btn-primary btn-block">確定</button>
                </div>
            </form>
        </div>
    </div>
</body>