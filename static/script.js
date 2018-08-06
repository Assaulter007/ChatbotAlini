$("#lixeira_icon").click(function() {
    $(".userText").text("Essa mensagem foi apagada");
});

$("#pincel_icon").click(function(){
    $(".userText").attr('cor','#009688');
    $(".userText").css("background-color", $(".userText").attr('cor'));
});

$("#color").change(function(){
    $(".userText").attr('cor',$(this).val());
    $(".userText").css("background-color", $(".userText").attr('cor'));
});

function getBotResponse() {
    var rawText = $("#textInput").val();
    var userHtml = '<br><div class="chatText userText" cor="#009688">'+rawText+'</div><br>';
    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    $(".userText").css("background-color",$(".userText").attr("cor"));
    var objDiv = document.getElementById("chatbox");
    objDiv.scrollTop = objDiv.scrollHeight;
    document.getElementById('userInput').scrollIntoView({block: 'start', behavior: 'smooth'});
    $.get("/get", { msg: rawText }).done(function(data) {
        var botHtml = '<br><div class="chatText botText">'+ data +'</div><br>';
        $("#chatbox").append(botHtml);
        var objDiv = document.getElementById("chatbox");
        objDiv.scrollTop = objDiv.scrollHeight;
        document.getElementById('userInput').scrollIntoView({block: 'start', behavior: 'smooth'});
    });
};