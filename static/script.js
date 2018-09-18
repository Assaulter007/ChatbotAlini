function getBotResponse() {
    var rawText = $("#textInput").val();
    var userHtml = '<div class="col-8 col-md-7 offset-md-4 offset-3 msg-box-sended">'+rawText+'</div>';
    $("#textInput").val("");
    $("#chat-container").append(userHtml);
    $("#chat-container").animate({ scrollTop: 1000000 }, 100);
    $.get("/get", { msg: rawText }).done(function(data) {
        var botHtml = '<div class="col-8 col-md-7 offset-md-1 msg-box-received">'+ data +'</div>';
        $("#chat-container").append(botHtml);
    $("#chat-container").animate({ scrollTop: 1000000 }, 100);
    });
};