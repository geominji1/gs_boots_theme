<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- header s-->
<nav class="navbar navbar-expand-sm navbar-white bg-white">
    <div class="container">


    <a class="navbar-brand" href="<? echo G5_URL?>">
            <img src="<? echo G5_THEME_IMG_URL ?>/Lemon_logo1.svg" alt="" style="width:180px">
        </a>



        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <?php
					$menu_datas = get_menu_db(0, true);
					$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
					$i = 0;
					foreach( $menu_datas as $row ){
						if( empty($row) ) continue;
						
					?>

                    



<li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo $row['me_link']; ?>" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
                            <?php echo $row['me_name'] ?>
                        </a>
                        <!-- 서브 -->
                        <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->

                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){

                            if( empty($row2) ) continue; 

                            if($k == 0)
                                echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">'.PHP_EOL;
                        ?>

                            <li >
                                <a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"  class="dropdown-item">
                                    <?php echo $row2['me_name'] ?>
                                </a>
                            </li>

                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                        <!-- 서브 -->
                    </li>
                
                <?php
					$i++;
					}   //end foreach $row



                    



					if ($i == 0) {  ?>
                <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a
                        href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수
                    있습니다.<?php } ?></li>
                    
                <?php } ?>
                <a class="login1" href="#"><img src="<? echo G5_THEME_IMG_URL ?>/Lemon_login1.png" alt=""></a>
                <div class="containerLogin py-5 text-center text-dark ">
                        로그인하기
                </div>
                </div>
                <a class="login2" href="#"><img src="<? echo G5_THEME_IMG_URL ?>/Lemon_login2.png" alt=""></a>
                
            </ul>


            

        </div>
    </div>
</nav>
<!-- header e-->
<div class="view">

<style>
    .mView{
        width: 100%;padding-top: 36%;_background: red;
        position: relative;overflow: hidden;
        }
    .mView video{position: absolute;width: 100%;left: 50%;top: 50%; transform:translate(-50%,-50%)}
</style>
<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay="" muted="" draggable="true"></video>
</div>

    <div class="viewImg">
    </div>
</div>



<hr>

<!-- 콘텐츠 시작 { -->

<? if(defined('_INDEX_')) { ?> 
    <div class="container_wr ">
<? }else{?>
    <div class="container">
<?}?>

<!-- content s -->
<div class="container1">
        <a class="lemon1" href="#"><img src="<? echo G5_THEME_IMG_URL ?>/Lemon1.png" alt=""></a>

            <div class="containertext1 py-5  text-dark ">
                YBM 레몬만의<br> 전용뷰어로 수업

                <div class="containertext2 py-5  text-dark ">
                    화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br> YBM교육이 개발한
                     <strong class="font-color-green">화상수업 전용 뷰어</strong>
                     입니다.
                </div>
            </div>
</div>


<div class="container2">
    <div class="classBook ">
    <a class="lemon2" href="#"><img src="<? echo G5_THEME_IMG_URL ?>/Lemon3.png" alt=""></a>
    <div class="containertext3 py-5  text-dark ">
    화상수업을 위해 개발된<br>e-Classbook

             <div class="containertext4 py-5  text-dark  ">
             오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>온라인 수업에 맞춰 개발된
            <strong class="font-color-green">온라인 전용 e-Classbook</strong>
            입니다.
    <a class="lemon3" href="#"><img src="<? echo G5_THEME_IMG_URL ?>/Lemon2.png" alt=""></a>
    </div>
                 