$(document).ready(function() {
    // 마우스를 올렸을 때 모든 서브 네비게이션과 배경을 슬라이드 다운
    $(".nav").mouseenter(function() {
        $(".sub-nav").stop(true, true).slideDown(300);
        $(".sub_nav_bg").stop(true, true).slideDown(300);
    });

    // 마우스가 서브 네비게이션 영역을 떠났을 때 모든 서브 네비게이션과 배경을 슬라이드 업
    $(".nav").mouseleave(function() {
        $(".sub-nav").stop(true, true).slideUp(300);
        $(".sub_nav_bg").stop(true, true).slideUp(300);
    });

    // .sub-nav 영역에 마우스를 올리면 슬라이드 업 중단
    $(".sub-nav").mouseenter(function() {
        $(".sub-nav").stop(true, true).slideDown(300);
        $(".sub_nav_bg").stop(true, true).slideDown(300);
    });

        // 네비게이션 버튼 클릭 시 네비게이션 열기/닫기
        $(".full-nav-btn").click(function() {
            if ($(".full-nav").is(":visible")) {
                $(".full-nav").hide();
                $(".bar").show();
                $(".close").hide();
            } else {
                $(".full-nav").show();
                $(".bar").hide();
                $(".close").show();
            }
        });
    
        // 서브 네비게이션 열기/닫기
        $(".full-nav > li > a").click(function(e) {
            e.preventDefault(); // 기본 동작 막기
            var $subNav = $(this).siblings(".full-sub-nav");
            $(".full-sub-nav").not($subNav).slideUp(300); // 다른 서브 네비게이션 닫기
            $subNav.slideToggle(300); // 현재 서브 네비게이션 열기/닫기
        });
        


// 퀵메뉴 top버튼
$('.quick-menu li a').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 500); 
});



});