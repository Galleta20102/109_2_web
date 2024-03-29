<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <title>Tea Your Life</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- link custom css -->
        <link rel="stylesheet" type="text/css" href="../css/about.css">
        <link rel="stylesheet" type="text/css" href="../css/webCover.css">
        <link rel="stylesheet" type="text/css" href="../css/webTitle.css">
        <!-- link jquery -->
        <script src="../js/jquery-3.6.0.js"></script>
        <!-- script bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    </head>
    <body>        
        <div id="Cover" class="text-center">
            <div class="container-fluid" id="toolBarContainer">
                <div id="toolBar" class="row">
                    <div class="col-sm-2 text-center" style="padding-top: 18px;">
                        <img src="../img/index/logo_v2.png" alt="logo.png" height="85px" onclick="window.location.href = '../view/index.php'">
                    </div>
                    <div class="col-sm-1 text-center tool"></div>
                    <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/about.php'">關於我們</div>
                    <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/section.php'">美食地圖</div>
                    <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/recommend.php'">近期特選</div>
                    <div class="col-sm-2 text-center tool" onclick="window.location.href = '../view/login.php'">
                        會員
                        <!--<img id="headshot" src="../img/headshot/dragonCat.jpg" alt="headshot.png">-->
                    </div>
                    <div class="col-sm-1 text-center tool"></div>
                </div>
            </div>
            <p id="titleBox">
                <font id="title">關於我們</font>
                <br>
                <font id="link">
                    <a href="../view/index.php" class="linkes">首 頁</a>
                     > 
                    <a href="../view/about.php" class="linkes">關 於 我 們</a>
                </font>
            </p>
        </div>
        <div id="bar"></div>
        <div id="introduce">
            <div class="row">
                <div class="col-sm-1">
                    　
                </div>
                <div class="col-sm-4" id="logoBox">
                    <img src="../img/about/logo.png" alt="ourLogo.png">
                </div>
                <div class="col-sm-7" id="introContant">
                    如果說，旅行是人生最讓人期待的事情，<br>
                    沒有旅行的日子，在咖啡廳想著下趟旅行<br>
                    喜歡美好事物的我們　不只喜歡氛圍<br>
                    更迷戀於那一口醒腦提神的滋味<br>
                    加入我們！憶起體驗人生的美好滋味
                </div>
            </div>
        </div>
    </body>
</html>