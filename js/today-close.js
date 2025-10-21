
//오늘하루안보기 버튼 설정
$(document).ready(function () {
    $(".popup .btcl01").click(function (e) {
         e.preventDefault();
        setCookieMobile("todayCookie", "done", 1);
        $(".popup01").hide();
    });
    $(".popup .btcl02").click(function (e) {
         e.preventDefault();
        setCookieMobile("todayCookie", "done", 1);
        $(".popup02").hide();
    });
    $(".popup .btcl03").click(function (e) {
         e.preventDefault();
        setCookieMobile("todayCookie", "done", 1);
        $(".popup03").hide();
    });
});

function setCookieMobile(name, value, expiredays) {
    var todayDate = new Date();
    todayDate.setDate(todayDate.getDate() + expiredays);
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function getCookieMobile() {
    var cookiedata = document.cookie;
    if (cookiedata.indexOf("todayCookie=done") < 0) {
        $(".popup01").show();
    } else {
        $(".popup01").hide();
    }

}
getCookieMobile();

function getCookieMobile() {
    var cookiedata = document.cookie;

    if (cookiedata.indexOf("todayCookie=done") < 0) {
        $(".popup02").show();
    } else {
        $(".popup02").hide();
    }
}
getCookieMobile();

function getCookieMobile() {
    var cookiedata = document.cookie;

    if (cookiedata.indexOf("todayCookie=done") < 0) {
        $(".popup03").show();
    } else {
        $(".popup03").hide();
    }
}
getCookieMobile();



function getCookieMobile() {
    var cookiedata = document.cookie;

    if (cookiedata.indexOf("todayCookie=done") < 0) {
        $(".popup03").show();
    } else {
        $(".popup03").hide();
    }
}
getCookieMobile();



//닫기 버튼 설정
 $(function () {
     $('.btcl011').click(function(e){
          e.preventDefault();
		$('.popup01').hide();
	 });
     $('.btcl022').click(function(e){
          e.preventDefault();
		$('.popup02').hide();
	 });
     $('.btcl033').click(function(e){
          e.preventDefault();
		$('.popup03').hide();
	 });
    });


