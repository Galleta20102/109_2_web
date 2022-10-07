<?php
require_once '../php/db.php';
require_once '../php/functions.php';
$city = array('北部', '中部', '南部');

if(isset($_GET['i'])){
    $now = $_GET['i'];
    $_SESSION['i'] = $now;
}
else{
    $now = $_SESSION['i'];
}
//抓個別店家的資料
$datas = get_store($now);
    
if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
{    
    if(isset($_POST['cafeName'])){
        $id = $_SESSION['login_user_id'];
        $sql = "INSERT INTO `favorite` (`user`, `name`, `img_path`, `phone`, `score`, `section`, `cafe`) VALUES ('{$id}', '{$_POST["cafeName"]}', '{$datas['img_path']}', '{$datas['phone']}', '{$datas['score']}', '{$datas['section']}', '{$datas['id']}');";
        //print_r($sql);
        $query = mysqli_query($_SESSION['link'],$sql);
    }
}


?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>Tea Your Life</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- link custom css -->
    <link rel="stylesheet" type="text/css" href="../css/cafeInfo.css">
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
                >
                <a href="../view/cafe.php?i=<?php echo $datas['section']?>"
                    class="linkes"><?php echo $city[$datas['section']-1]?></a>
                >
                <a href="../view/cafeInfo.php?i=<?php echo $now?>" class="linkes"><?php echo $datas['name']; ?></a>
            </font>
        </p>
    </div>

    <div class="container" id="infoBox">
        <div class="row">
            <div class="col-sm-7">
                <p id="cafeName"><?php echo $datas['name']; ?></p>

                <p class="infoDetail">
                    營 業 時 間<br>
                    <font class="contant"><?php echo $datas['time']; ?></font>
                </p>
                <p class="infoDetail">
                    地 址<br>
                    <font class="contant"><?php echo $datas['address']; ?></font>
                </p>
                <p class="infoDetail">
                    電 話<br>
                    <font class="contant"><?php echo $datas['phone']; ?></font>
                </p>
                <form action="cafeInfo.php" method="post">
                    <input name="cafeName" type="hidden" value="<?php echo $datas['name'] ?>">
                    <?php
                                if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
                                {
                                    $sql = "SELECT *  FROM `favorite` WHERE `user` = '{$_SESSION["login_user_id"]}' AND `name` = '{$datas["name"]}'";
                                    $query = mysqli_query($_SESSION['link'], $sql);
                                    if (mysqli_num_rows($query) <= 0)
                                    {
                                        echo "<input type='submit' class='btn' value='新增到收藏'>";
                                    }
                                    else{
                                        echo "<input type='submit' class='btn' value='已收藏' disabled>";
                                    }
                                }
                            ?>

                </form>
            </div>
            <div class="col-sm-5">
                <iframe src="<?php echo $datas['map']; ?>" width="500" height="400" style="border:0;" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!--
        <div class="container" id="productBox">
            <p id="productTitle">
                人 氣 商 品
            </P>

            <div id="product" class="row rounded">
                <div class="col-sm-5">
                    <img src="../images/cafeInfo/cake01.jpg" alt="product">
                </div>
                <div class="col-sm-7" id="productInfo">
                    <p id="productName">
                        水果布蕾香緹蛋糕<br>
                        Assorted Fruit Creme Brulee Cake
                    </p>
                    <p id="price">
                        <font class="contant">$140</font>
                    </p>
                    <p id="productIntroduce">
                        <font class="contant">
                            喜歡新鮮水果的傢伙有種就給我掏出你大把大把的台幣砸在我們收銀檯上以解鎖「水果布蕾香緹蛋糕品嘗成就(1/1)」edf;ljowprgo39tmuo5uj89gc5i9opxej
                        </font class="contant">
                    </p>
                </div>
            </div>
            <br><br>
            <div id="product" class="row rounded">
                <div class="col-sm-5">
                    <img src="../images/cafeInfo/cale02.png" alt="product">
                </div>
                <div class="col-sm-7" id="productInfo">
                    <p id="productName">
                        經典千層薄餅 (含白蘭地)<br>
                        Classic Mille Crepe
                    </p>
                    <p id="price">
                        <font class="contant">$120</font>
                    </p>
                    <p id="productIntroduce">
                        <font class="contant">
                           我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦我懶得打了啦隨便啦
                        </font class="contant">
                    </p>
                </div>
            </div>
            <br><br>
            <div id="product" class="row rounded">
                <div class="col-sm-5">
                    <img src="../images/cafeInfo/cake03.jpg" alt="product">
                </div>
                <div class="col-sm-7" id="productInfo">
                    <p id="productName">
                        法式黑森林蛋糕<br>
                        Black Forest Cake
                    </p>
                    <p id="price">
                        <font class="contant">$120</font>
                    </p>
                    <p id="productIntroduce">
                        <font class="contant">
                           我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕我是黑森林蛋糕
                        </font class="contant">
                    </p>
                </div>
            </div>
            -->
    </div>

</body>

</html>