<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <div class="mylatest">
        <div class="title">
            <h3><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h3>
            <a href="<?php echo get_pretty_url($bo_table); ?>" class="mIcon">icon</a>
        </div>
        <ul class="content">
            <?php for ($i=0; $i<$list_count; $i++) {  ?>
            
            <li>
                <a href="<? echo get_pretty_url($bo_table, $list[$i]['wr_id']) ?>">
                    <h4><? echo $list[$i]['subject']; ?>
                    <? if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>"; ?>
                    </h4>
                    <div>
                    <? echo get_text(cut_str(strip_tags($list[$i]['wr_content']),80)); ?> 
            </div>
                    <p><?php echo $list[$i]['datetime2'] ?></p>
                </a>
            </li>

            <? } ?>

            <?php if ($list_count == 0) { //게시물이 없을 때  ?>
            <li class="empty_li">게시물이 없습니다.</li>
            <?php }  ?>
           


        </ul>
    </div>




