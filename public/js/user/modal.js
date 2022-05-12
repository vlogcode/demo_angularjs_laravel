$(document).ready(function (){

    $("#shpw-pp").click(function (){
        $(".popup-sua").css("display","flex");
    })
    $("#show-tt").click(function (){
        $(".popup-them").css("display","flex");
    })
    $(".btn-close").click(function (){
        $(".popup-sua").hide();
        $(".popup-them").hide();
    })

})
$(window).click(function (e) {
    if ($(e.target).is(".popup-sua")) {
        $(".popup-sua").hide();
    }
    if ($(e.target).is(".popup-them")) {
        $(".popup-them").hide();
    }

});

