<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>
   
   
       <!-- Xicon -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/font.css">
    <link rel="stylesheet" href="../../css/header.css">
    
<header id="header">
    <div class="header_wrap">
        <a href="http://binggisil.com/" class="logo">
            <img src="/img/icon/nav_logo.png" alt="">
        </a>
        <ul class="nav">
            <li><a href="/sub01/intro.html">빙기실 치유마을 소개</a>
                <ul class="sub-nav">
                    <li><a href="/sub01/intro.html">빙기실 치유마을 소개</a></li>
                    <li><a href="/sub01/facilities.html">빙기실 치유마을 부대시설</a></li>
                    <li><a href="/sub01/directions.html">위치 및 교통정보</a></li>
                </ul>
            </li>
            <li><a href="/sub02/camping01.html">달빛고운 병곡 캠핑장 소개</a>
                <ul class="sub-nav">
                    <li><a href="/sub02/camping01.html">시설배치도</a></li>
                    <li><a href="/sub02/stay/stay01.html">시설별안내</a></li>
                </ul>
            </li>
            <li><a href="/sub03/information.html">이용안내</a>
                <ul class="sub-nav">
                    <li><a href="/sub03/information.html">이용안내</a></li>
                    <li><a href="/sub03/time.html">이용시간</a></li>
                    <li><a href="/sub03/price.html">이용요금</a></li>
                    <li><a href="/sub03/step.html">이용준수사항</a></li>
                    <li><a href="/sub03/inquiry.html">안내 및 문의전화</a></li>
                </ul>
            </li>
            <li><a href="/sub04/reservation.html">예약안내</a>
                <ul class="sub-nav">
                    <li><a href="/sub04/reservation.html">예약안내</a></li>
                    <li><a href="https://www.camfit.co.kr/camp/6327c8becf39e5001fe4a240" target="_blank">온라인 예약</a></li>
                    <li><a href="https://www.camfit.co.kr/mypage/non/reservation" target="_blank">예약확인 및 취소</a></li>
                </ul>
            </li>
            <li><a href="/sub05/cure/cure.html">체험안내</a>
                <ul class="sub-nav">
                    <li><a href="/sub05/cure/cure.html">치유 프로그램</a></li>
                    <li><a href="/sub05/healing/healing.html">힐링 프로그램</a></li>
                    <li><a href="/sub05/program.html">프로그램 신청안내</a></li>
                </ul>
            </li>
            <li><a href="/sub06/farm.html">농산물안내</a>
                <ul class="sub-nav">
                    <li><a href="/sub06/farm.html">농산물 소개</a></li>
                    <li><a href="/sub06/order.html">농산물 주문 안내</a></li>
                </ul></li>
            <li><a href="/gb/bbs/board.php?bo_table=notice">공지, 후기</a>
                <ul class="sub-nav">
                    <li><a href="/gb/bbs/board.php?bo_table=notice">공지사항</a></li>
                    <li><a href="/gb/bbs/board.php?bo_table=review">이용 후기</a></li>
                    <li><a href="/gb/bbs/board.php?bo_table=qa">Q & A</a></li>
                </ul>
            </li>
        </ul>
        <div class="full-nav-btn">
            <i class="xi-bars bar"></i>
            <i class="xi-close close"></i>
        </div>
    </div>
    <ul class="full-nav">
        <li class="login">
            <a href="" style="font-weight: 300;">나의 회원정보</a>
            <ul class="full-sub-nav" style="background-color: #eee;">
                <li>
                    <div class="login-wrap">
                        <div class="login-box">
                            <?=outlogin( "basic");?>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="javascript:void(0)">빙기실 치유마을 소개</a>
            <ul class="full-sub-nav">
                <li><a href="/sub01/intro.html">빙기실 치유마을 소개</a></li>
                <li><a href="/sub01/facilities.html">빙기실 치유마을 부대시설</a></li>
                <li><a href="/sub01/directions.html">위치 및 교통정보</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0)">달빛고운 병곡 캠핑장 소개</a>
            <ul class="full-sub-nav">
                <li><a href="/sub02/camping01.html">시설배치도</a></li>
                <li><a href="/sub02/stay/stay01.html">시설별안내</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0)">이용안내</a>
            <ul class="full-sub-nav">
                <li><a href="/sub03/information.html">이용안내</a></li>
                <li><a href="/sub03/time.html">이용시간</a></li>
                <li><a href="/sub03/price.html">이용요금</a></li>
                <li><a href="/sub03/step.html">이용준수사항</a></li>
                <li><a href="/sub03/inquiry.html">안내 및 문의전화</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0)">예약안내</a>
            <ul class="full-sub-nav">
                <li><a href="/sub04/reservation.html">예약안내</a></li>
                <li><a href="https://www.camfit.co.kr/camp/6327c8becf39e5001fe4a240" target="_blank">온라인 예약</a></li>
                <li><a href="https://www.camfit.co.kr/mypage/non/reservation" target="_blank">예약확인 및 취소</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0)">체험안내</a>
            <ul class="full-sub-nav">
                <li><a href="/sub05/cure/cure.html">치유 프로그램</a></li>
                <li><a href="/sub05/healing/healing.html">힐링 프로그램</a></li>
                <li><a href="/sub05/program.html">프로그램 신청안내</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0)">농산물안내</a>
            <ul class="full-sub-nav">
                <li><a href="/sub06/farm.html">농산물 소개</a></li>
                <li><a href="/sub06/order.html">농산물 주문 안내</a></li>
            </ul></li>
        <li><a href="javascript:void(0)">공지, 후기</a>
            <ul class="full-sub-nav">
                <li><a href="/gb/bbs/board.php?bo_table=notice">공지사항</a></li>
                <li><a href="/gb/bbs/board.php?bo_table=review">이용 후기</a></li>
                <li><a href="/gb/bbs/board.php?bo_table=qa">Q & A</a></li>
            </ul>
        </li>
    </ul>
    <div class="sub_nav_bg"></div>
</header>

<!-- quick -->
<style>
    body{
        position: relative;
    }
    .quick-menu{
        position: fixed;
        right: 30px;
        bottom: 50px;
        z-index: 999;
    }
    .quick-menu a i{
        font-size: 25px;
    }
    .quick-menu a{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #fff;
        box-shadow: 0px 0px 12px #adadad;
    }
    @media screen and (max-width:550px) {
        .quick-menu a{
            width: 45px;
            height: 45px;
        }
        .quick-menu a i{
            font-size: 22px;
        }
        .quick-menu{
            right: 20px;
        }
    }
 </style>
 <ul class="quick-menu">
    <li>
        <a href="javascript:void(0)" class="scrollTop">
            <i class="xi-arrow-up"></i>
        </a>
    </li>
 </ul>
<!-- //quick -->


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="../../js/nav.js"></script>
<script src="../../js/sub.js"></script>

<!--
<header id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div class="to_content"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>


    

    <div id="tnb" class="pc_view">

        <ul>
            <li class="right tnb_res"><a href=""><i class="fa fa-calendar"></i> 예약하기</a></li>
            <?php echo outlogin('theme/basic'); // 외부 로그인 ?>
            <li class="tnb_sns"><a href=""><i class="fa fa-phone"></i> 02-123-1234</a></li>


        </ul>
  
    </div>


    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/m_logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <button type="button" id="gnb_open"><i class="fa fa-bars" ></i><span class="sound_only"> 메뉴열기</span></button>
        <button type="button" class="hd_sch_btn"><i class="fa fa-search"></i><span class="sound_only">검색열기</span></button>

        <div id="hd_sch">
            <div class="sch_wr">
                <h2 class="sound_only">사이트 내 전체검색</h2>
                <form name="fsearchbox" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);" method="get">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <input type="text" name="stx" id="sch_stx" placeholder="검색어(필수)" required maxlength="20">
                <button type="submit" value="검색" id="sch_submit"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>
                <button type="button" class="btn_close"><i class="fa fa-times-circle"></i><span class="sound_only">검색</span></button>
            </div>
        </div>

        <div id="gnb" class="pc_view">
            <ul id="gnb_1dul">
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_mobile_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);

            for($i=0; $row=sql_fetch_array($result); $i++) {
            ?>
                <li class="gnb_1dli">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $sql2 = " select *
                                from {$g5['menu_table']}
                                where me_mobile_use = '1'
                                  and length(me_code) = '4'
                                  and substring(me_code, 1, 2) = '{$row['me_code']}'
                                order by me_order, me_id ";
                    $result2 = sql_query($sql2);

                    for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                        if($k == 0)
                            echo '<ul class="gnb_2dul">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><span></span><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    }

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
            <?php
            }

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
            <?php } ?>
            </ul>

        </div>

        <div id="gnb2">
            <button type="button" class="btn_close"><i class="fa fa-times"></i></button>
            <ul class="gnb_tnb">
                <?php if ($is_member) {  ?>

                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <?php }  ?>

            </ul>
            <ul id="gnb2_1dul">
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_mobile_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);

            for($i=0; $row=sql_fetch_array($result); $i++) {
            ?>
                <li class="gnb2_1dli">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb2_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $sql2 = " select *
                                from {$g5['menu_table']}
                                where me_mobile_use = '1'
                                  and length(me_code) = '4'
                                  and substring(me_code, 1, 2) = '{$row['me_code']}'
                                order by me_order, me_id ";
                    $result2 = sql_query($sql2);

                    for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                        if($k == 0)
                            echo '<button type="button" class="btn_gnb_op">하위분류</button><ul class="gnb2_2dul">'.PHP_EOL;
                    ?>
                        <li class="gnb2_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb2_2da"><span></span><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    }

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
            <?php
            }

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
            <?php } ?>
            </ul>

        </div>     
        <script>
        $(function () {
            //폰트 크기 조정 위치 지정
            var font_resize_class = get_cookie("ck_font_resize_add_class");
            if( font_resize_class == 'ts_up' ){
                $("#text_size button").removeClass("select");
                $("#size_def").addClass("select");
            } else if (font_resize_class == 'ts_up2') {
                $("#text_size button").removeClass("select");
                $("#size_up").addClass("select");
            }

            $(".hd_opener").on("click", function() {
                var $this = $(this);
                var $hd_layer = $this.next(".hd_div");

                if($hd_layer.is(":visible")) {
                    $hd_layer.hide();
                    $this.find("span").text("열기");
                } else {
                    var $hd_layer2 = $(".hd_div:visible");
                    $hd_layer2.prev(".hd_opener").find("span").text("열기");
                    $hd_layer2.hide();

                    $hd_layer.show();
                    $this.find("span").text("닫기");
                }
            });


            $(".btn_gnb_op").click(function(){
                $(this).toggleClass("btn_gnb_cl").next(".gnb2_2dul").slideToggle(300);
                
            });

            $(".hd_closer").on("click", function() {
                var idx = $(".hd_closer").index($(this));
                $(".hd_div:visible").hide();
                $(".hd_opener:eq("+idx+")").find("span").text("열기");
            });

            $(".hd_sch_btn").on("click", function() {
                $("#hd_sch").show();
            });

            $("#hd_sch .btn_close").on("click", function() {
                $("#hd_sch").hide();
            });

            
            $("#gnb_open").on("click", function() {
                $("#gnb2").show();
            });

            $("#gnb2 .btn_close").on("click", function() {
                $("#gnb2").hide();
            });

 
        });

        //상단고정
        if( $("#hd").length ){
            var jbOffset = $("#hd").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( 'body' ).addClass( 'fixed' );
                }
                else {
                    $( 'body' ).removeClass( 'fixed' );
                }
            });
        }
        </script>
        
    </div>
   
</header>

-->

<div id="wrapper">

    <div id="container">
<!--    <?php if (!defined("_INDEX_")) { ?><h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></h2><?php } ?>-->
