$(document).on("ready", function(){
    $("#username").on("keyup", function(){
        if($(this).val() != '')
        {
            $.ajax({
                type : "POST",	
                url : "../php/check_username.php",  
                data : {	
                'n' : $(this).val()	
                },
                dataType : 'html' //設定回應html 
            }).done(function(data) {
                if(data == 'no')
                {
                    //#username移除 has-error 加入 has-success 
                    $("#username").parent().removeClass("has-error").addClass("has-success"); 
                    //#logic button移除 disabled
                    $("#logic button[type='submit']").removeClass('disabled');
                    $("#logic button").attr('disabled', false);
                }
                else
                {
                    alert("帳號有重複，不可以註冊");
                    $("#username").parent().removeClass("has-success").addClass("has-error");
                    //#logic button加上 disabled
                    $("#logic button[type='submit']").addClass('disabled');
                    $("#logic button").attr('disabled', true);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                alert("有錯誤產生，請看 console log");
                console.log(jqXHR.responseText);
            });
        }
        else
        {
            $("#username").parent().removeClass("has-success").removeClass("has-error");
            $("#logic button").attr('disabled', false);
        }
    });
    $("form").on("submit", function(){
        if ($("#password").val() != $("#confirm_password").val()) {
            //把 input 的父標籤 加入 has-error，讓人知道哪個地方有錯誤，作為提醒
            $("#password").parent().addClass("has-error"); 
            $("#confirm_password").parent().addClass("has-error");     
            alert("兩次密碼輸入不一樣，請確認");
        }
        else {
            $.ajax({
                type : "POST",
                url : "../php/add_user.php",
                data : {
                    'un' : $("#username").val(), 
                    'pw' : $("#password").val(), 
                    'n' : $("#name").val() 
                },
                dataType : 'html'
            }).done(function(data) {
                console.log(data);
                if(data == 'yes')
                {
                    alert("註冊成功，將自動前往登入頁。");
                    window.location.href = "login.php";
                }
                else
                {
                    alert("註冊失敗，請確認電腦連線或聯絡我們");
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                //失敗的時候
                alert("有錯誤產生，請看 console log");
                console.log(jqXHR.responseText);
            });
        }
        return false;
    });
});