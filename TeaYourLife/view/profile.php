<?php
require_once '../php/db.php';
//判斷是否已登入
//print_r($_SESSION);
if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	//直接轉跳到 login.php
	header("Location: login.php");
}

require_once '../php/db.php';
require_once '../php/functions.php';
$datas = get_favorite_datas();
$user = get_user_datas();
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
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel=" stylesheet" type="text/css" href="../css/webCover.css">
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
                <div class="col-sm-2 text-center tool" onclick="window.location.href = '../php/logout.php'">
                    登出　
                    <!--<img id="headshot" src="../img/headshot/dragonCat.jpg" alt="headshot.png">-->
                </div>
                <div class="col-sm-1 text-center tool"></div>
            </div>
        </div>
        <p id="titleBox">
        <div id="title"><?php echo $user['name']; ?></div>
        <div id="link"><?php echo $user['username']; ?></div>
        <br>
        </p>

        <div class="container" id="favoriteSection">
            <div class="row">
                <div class="col-sm-2">　</div>
                <div class="col-sm-8" style="font-size: 50px;color: rgb(126,106,88); text-align: left;">❋ 珍藏</div>
                <div class="col-sm-2">　</div>
            </div>


            <?php if(!empty($datas)):?>
            <?php foreach($datas as $row):?>
            <div class="row">
                <div class="col-sm-2">　</div>
                <div class="col-sm-8 row rounded favoriteCafe"
                    onclick="window.location.href = '../view/cafeInfo.php?i=<?php echo $row['cafe']?>'">
                    <div class="col-sm-5 imgback">
                        <img src="<?php echo $row['img_path']; ?>" alt="cafePicture">
                    </div>
                    <div class="col-sm-6" id="cafeInfo" style="text-align: left;">
                        <p id="cafeName"><?php echo $row['name']; ?></p>
                        <p id="phoneNumber"><?php echo $row['phone']; ?></p>
                        <p id="starRating">★ <?php echo $row['score']; ?></p>
                    </div>
                    <div class="col-sm-1">
                        <a href='' class='btn btn-danger del_profile' data-id="<?php echo $row['id'];?>">刪除</a>
                    </div>
                </div>
                <div class="col-sm-2">　</div>
            </div>
            <br>
            <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    $(document).on("ready", function() {
        $("a.del_profile").on("click", function() {

            var this_tr = $(this).parent().parent();
            console.log($(this).attr("data-id"));
            alert("刪除資料中");
            $.ajax({
                type: "POST",
                url: "../php/del_profile.php",
                data: {
                    'id': $(this).attr("data-id") //文章id

                },
                dataType: 'html'
            }).done(function(data) {
                if (data == "yes") {
                    alert("刪除成功，點擊確認從列表移除");
                    this_tr.fadeOut();
                } else {
                    alert("刪除錯誤:" + data);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                alert("有錯誤產生，請看 console log");
                console.log(jqXHR.responseText);
            });
        });
    });
    </script>
</body>

</html>