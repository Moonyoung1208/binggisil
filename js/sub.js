$(document).ready(function() {
    $(".menu").click(function(){
        $(this).siblings(".address-wrap-sub").slideToggle();
        $(this).parent().siblings().find(".address-wrap-sub").slideUp(); // 다른 서브 메뉴들을 닫기 위해 추가
    });


        // .camp01-btn button 클릭 시 .zoom을 표시
        $('.camp01-btn .btn01').click(function() {
            $('.zoom01').fadeIn(); // .zoom을 페이드 인 애니메이션으로 표시
        });
    
        $('.camp01-btn .btn02').click(function() {
            $('.zoom02').fadeIn(); // .zoom을 페이드 인 애니메이션으로 표시
        });
    
        // .zoom i 클릭 시 .zoom을 숨김
        $('.zoom i').click(function() {
            $('.zoom').fadeOut(); // .zoom을 페이드 아웃 애니메이션으로 숨김
        });
});