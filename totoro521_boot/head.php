<nav id="gnb">
         <h2>메인메뉴</h2>
         <div class="gnb_wrap">
            <ul id="gnb_1dul">
               
               <?php
               $menu_datas = get_menu_db(0, true);
               $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
               $i = 0;
               foreach( $menu_datas as $row ){
                  if( empty($row) ) continue;
                  $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
               ?>
               <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                  <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                  
               </li>
               <?php
               $i++;
               }   //end foreach $row

               if ($i == 0) {  ?>
                  <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
               <?php } ?>
            </ul>
            
            
         </div>
       </nav>


