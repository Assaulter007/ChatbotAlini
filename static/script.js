function getBotResponse() {
    var rawText = $("#textInput").val();
    var userHtml = '<div class="col-md-6 offset-md-5 msg-box-sended">'+rawText+'</div>';
    $("#textInput").val("");
    $("#chat-container").append(userHtml);
    $("#chat-container").animate({ scrollTop: 1000000 }, 100);
    $.get("/get", { msg: rawText }).done(function(data) {
        var botHtml = '<div class="col-md-6 offset-md-2 msg-box-received">'+ data +'</div>';
        $("#chat-container").append(botHtml);
    $("#chat-container").animate({ scrollTop: 1000000 }, 100);
    });
};