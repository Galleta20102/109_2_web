<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>選 擇 區 域</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- link custom css -->
    <link rel="stylesheet" type="text/css" href="../css/section.css">
    <link rel="stylesheet" type="text/css" href="../css/webCover.css">
    <link rel="stylesheet" type="text/css" href="../css/webTitle.css">
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
        <p id="titleBox">
            <font id="title">美食地圖</font>
            <br>
            <font id="link">
                <a href="../view/index.php" class="linkes">首 頁</a>
                >
                <a href="../view/section.php" class="linkes">美 食 地 圖</a>
            </font>
        </p>
    </div>

    <div class="container" style="margin-top: 5px;">
        <div class="row">
            <div class="container" id="section">
                <div class="row">
                    <div class="col-sm-4 sectionBox" id="sectionBoxN"
                        onclick="window.location.href = '../view/cafe.php?i=<?php echo $sec = 1;?>'">　
                    </div>
                    <div class="col-sm-4 sectionBox" id="sectionBoxC"
                        onclick="window.location.href = '../view/cafe.php?i=<?php echo $sec = 2;?>'">
                    </div>
                    <div class="col-sm-4 sectionBox" id="sectionBoxS"
                        onclick="window.location.href = '../view/cafe.php?i=<?php echo $sec = 3;?>'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>