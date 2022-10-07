$(document).on("ready", function(){
    $("form").on("submit", function(){
        $.ajax({
            type : "POST",
            url : "../php/verify_user.php",
            data : {
                'un' : $("#username").val(), 
                'pw' : $("#password").val(), 
            },
            dataType : 'html'
        }).done(function(data) {
            console.log(data);
            if(data == 'yes')
            {
                alert("登入成功");
                window.location.href = "profile.php";
            }
            else
            {
                alert("登入失敗，請確認帳號密碼");
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            //失敗的時候
            alert("有錯誤產生，請看 console log");
            console.log(jqXHR.responseText);
        });
        return false;
    });
});