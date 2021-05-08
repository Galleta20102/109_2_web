var index = -1;
var score = 0;
var quiz = new Array("白白身子圓溜溜　樣子像一個桌球<br>放在鍋里煮一煮　全家吃它過十五"
    , "糖是皮來果是餡　一串一串紅艷艷<br>冬天吃它不難買　夏天和它難見面"
    , "兄弟兩個瘦又長　扭在一起下池塘<br>池塘裡面打個滾　撈起變得黃又胖"
    , "珍珠白姑娘　許配竹葉郎<br>穿衣去洗澡　脫衣上牙床"
    , "一群小白鵝　撲通跳下河<br>先沉后漂浮　撈起解飢餓");
var ans = new Array("湯圓", "糖葫蘆", "油條", "粽子", "餃子");
var opt = new Array();
opt[0] = ["魚丸", "水煮蛋", "湯圓", "馬鈴薯"];
opt[1] = ["棉花糖", "糖葫蘆", "棒棒糖", "冰棒"];
opt[2] = ["薯條", "炸雞腿", "雙胞胎", "油條"];
opt[3] = ["燕餃", "粽子", "蛤蜊", "和菓子"];
opt[4] = ["餃子", "麵疙瘩", "雞蛋", "白玉米"];

$(document).ready(function () {
    setContant();
});
function setContant() {
    index++;
    if(index == 5){
        for(var i=1;i<4;i++){
            $("#opt"+i).remove();
        }
        $("#opt0").val(score);
        $("#opt0").css("width","80%");
        $("#opt0").css("height","40%");
        $("#opt0").css("font-size","50px");
        $("#opt0").css("background-color","rgb(255, 223, 211)");
        //255, 199, 179
        $("#opt0").hover(function(){
            $("#opt0").css("background-color","pink");
            $("#opt0").val("回首頁 ( ´•̥̥̥ω•̥̥̥` )");
            $("#opt0").css("border","2px gray solid");
        },function(){
            $("#opt0").css("background-color","rgb(255, 223, 211)");
            $("#opt0").val(score);
        });
        $("#score").remove();
        $("body").css("background-image","url('../images/score_Background.jpg')");
        $("#titleSmile").html("σ ﾟ∀ ﾟ) ﾟ∀ﾟ)σ");
        $("#titleSmile").css("color","rgb(155, 50, 146)");
        $("#quiz").html("<p>來到這裡就代表你完成了猜燈謎的測驗</p><p>讓你也看看你這鳥分數為多少吧</p>");
    }
    else{
        $("#titleSmile").html("(ﾉ>ω<)ﾉ 好來第 "+ (index + 1) +" 題欸");
        $("#quiz").html(quiz[index]);
        for (var i = 0; i < 4; i++) {
            $("#opt" + i).val(opt[index][i]);
            $("#opt" + i).css("border","2px gray solid");
        }
    }
}
$("input").click(function (event) {
    if(index <= 4){
        if (event.target.value == ans[index]) {
            score+=20;
            $("#score").html("目前得分 : "+score);
            $(this).css("border","6px rgb(45,186,30) solid");
        }
        else{
            $(this).css("border","6px rgb(186,45,30) solid")
            $("#opt" + opt[index].indexOf(ans[index])).css("border","6px rgb(45,186,30) solid");
        }
        setTimeout(function(){
            setContant();
        },1000);
    }
    else if(index == 5){
        window.location.href = "../view/index.html";
    }
})