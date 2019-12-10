<div class="bg-primary text-white main-area-header">
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

<div class="actionbar sticky-top bg-white" style="top: 3.6rem">
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
            <form name="login" method="post" action="login.php" class="text-left">
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-face"> &nbsp;&nbsp;</span> 姓名
                        <p class="text-danger">*</p>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-email-open"> &nbsp;&nbsp;</span> Email
                        <p class="text-danger">*</p>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-map-marker"> &nbsp;&nbsp;</span> 地址
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-gender-male-female"> &nbsp;&nbsp;</span> 性別
                    </div>
                    <div class="col-md-10 col-sm-12 form-text">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="male" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="male">男</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="female" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="female">女</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="other" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="other">其他或不願透露</label>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-phone"> &nbsp;&nbsp;</span> 電話
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" class="form-control" id="phone">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-cake"> &nbsp;&nbsp;</span> 生日
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input type="date" class="form-control" id="birthday">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-2 form-text text-secondary">
                        <span class="mdi mdi-note-text"> &nbsp;&nbsp;</span> 備註
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <input type="text" class="form-control" id="note">
                    </div>
                </div>
                <div class="text-center pt-3">
                    <button type="reset" class="btn btn-secondary mr-2">重填</button>
                    <button type="submit" class="btn btn-primary">儲存</button>
                </div>
            </form>
        </div>
    </div>
</div>