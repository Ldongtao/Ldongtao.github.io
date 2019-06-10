var loginId = getCookie("loginId");
var loginName = getCookie("loginName");
var userInfo = `<span>${loginName}欢迎您!</span><span onclick="userExist()">&emsp;退出</span>`;
if (loginName) {
    $(".logo-box").html(userInfo);
    cartNum();
} else {

}

function userExist() {
    setCookie("loginName", "", -7);
    setCookie("loginId", "", -7);
    // gotoLogin();
    window.location.reload();
}


function cartNum() {
    var loginId = getCookie("loginId");
    $.ajax({
        type: "get",
        url: "../php/getgoodsnum.php",
        data: {
            userid: loginId
        },
        dataType: "json",
        success: function(obj) {
            if (obj["sum"] >= 1) {
                $("#cartsum").html(`${obj["sum"]}`);
                // shoppingInfoDiv.innerHTML = `<a href="myshoppingcarlist.html">${obj["sum"]}</a>`;
            } else {

            }
        }
    });
}


$(".all-style-title").mouseover(function() {
    $(".all-style .all-style-tab").css({
        "display": "block",
    });
});
$(".all-style-tab li").mouseover(function() {
    $(this).css("backgroundColor", "#d00").siblings().css("backgroundColor", "");
})

$(".all-style-tab li").on("mouseout", function() {
    $(".all-style-tab").css("display", "none");
})