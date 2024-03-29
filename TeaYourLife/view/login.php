<?php
require_once '../php/db.php';

if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
{
  header("Location: profile.php");
}
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>會 員 登 入</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- link custom css -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/webCover.css">
    <!-- link jquery -->
    <script src="../js/jquery-3.6.0.js"></script>
    <!-- script bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="Cover" class="text-center">
        <div class="container-fluid" id="toolBarContainer">
            <div id="toolBar" class="row">
                <div class="col-sm-2 text-center" style="padding-top: 18px;">
                    <img src="../img/index/logo_v2.png" alt="logo.png" height="85px"
                        onclick="window.location.href = '../view/index.php'">
                </div>
                <div class="col-sm-1 text-center tool"></div>
                <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/about.php'">關於我們</div>
                <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/section.php'">美食地圖</div>
                <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/recommend.php'">近期特選
                </div>
                <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/login.php'">
                    會員　
                    <!--<img id="headshot" src="../img/headshot/dragonCat.jpg" alt="headshot.png">-->
                </div>
                <div class="col-sm-1 text-center tool"></div>
            </div>
        </div>
        <div class="center" style="margin-top: 100px;">
            <form name="login">
                <h3><b>會員登入</b></h3>
                <div style="float:left;width: 425px;height: 1px; background: #654236;"></div>
                <input type="text" class="txt" id="username" name="username" placeholder="請輸入帳號" required>
                <br>
                <input type="password" class="txt" id="password" name="password" placeholder="請輸入密碼" required>
                <br>
                <input type="submit" class="btn submit" value="登入">
                <br>
                <h5>忘記密碼?</h5>
                <div style="float:left;width: 425px;height: 1px; background: #654236;"></div>
                <input type="button" class="btn create" value="註冊新帳號"
                    onclick="window.location.href = '../view/register.php'">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>