<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 精彩瞬间 -->
<div class="jcsj">
    <div class="movebox">
        <div class="moveboxtop">
            <div class="llogo">
               <img src="<?php echo IMG_PATH;?>tysl/jcsj.jpg" alt=""> 
            </div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=78c55cda84836f630f6a221431d1e30a&action=category&catid=0&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder DESC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($r[catid]==10) { ?>
            <span><a href="<?php echo $r['url'];?>">+MORE</a></span>
            <?php } ?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="line"></div>
            <div class="btnr"><img src="<?php echo IMG_PATH;?>tysl/djright.png" alt=""></div>
            <div class="btnl"><img src="<?php echo IMG_PATH;?>tysl/djleft.png" alt=""></div>
        </div>
        <div class="win">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0d33732c3f41047814131886caba9d9f&action=position&posid=12&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','order'=>'listorder DESC','limit'=>'25',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>">
            <ul class="imm">
                <li><img src="<?php echo IMG_PATH;?>tysl/jj1.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj2.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj3.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj4.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj5.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj6.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj7.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj8.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj9.jpg" alt=""></li>
                <li><img src="<?php echo IMG_PATH;?>tysl/jj10.jpg" alt=""></li> 
            </ul>
            </a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<!--内容栏-->
<div class="contentbox">
   <div class="content">
       <div class="contentleft">
            <div class="contentleftt">
                <img src="<?php echo IMG_PATH;?>tysl/gywm.jpg" alt="">
                <p>太原市晟琅博通企业管理咨询有限公司是国内第一批专业从事户外体验式培训的机构，是目前国内最优秀的拓展培训公司之一。致力于为国内外企业提供具有现代管理观念与技能的拓展培训课程。从业十余年，培训过的企业...<span>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2986c18d1db12b35d56e6d88448711dc&action=position&posid=1&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'25',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>">[MORE]</a>
                <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                </span></p>

            </div>
            <div class="contentleftm">
                <img src="<?php echo IMG_PATH;?>tysl/fwnr1.jpg" alt="">
            </div>
            <div class="contentleftb">
               <div class="knowm">
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=78c55cda84836f630f6a221431d1e30a&action=category&catid=0&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder DESC','limit'=>'25',));}?>
                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <?php if($r[catid]==11) { ?>
                   <a href="<?php echo $r['url'];?>"><img src="<?php echo IMG_PATH;?>tysl/knowm.jpg" alt=""></a>
                   <?php } ?>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </div>
            </div>
       </div>
       <div class="contentmid">
           <div class="contentmidt">
                <img src="<?php echo IMG_PATH;?>tysl/cgal1.jpg" alt="">
                <div class="fff">
                    <img src="<?php echo IMG_PATH;?>tysl/fff.jpg" alt="">
                </div>
                <p><span>2016年4月亚宝药业腾格里沙漠</span>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=94c8864ab06069744257fdd78cbc8aab&action=position&posid=9&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'listorder DESC','limit'=>'25',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>">[MORE]</a>
                <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                2014年4月13-15日，由晟琅博通拓展培训机构承办的亚宝药业精英...</p>
           </div>
           <div class="aaa">
               <ul class="aaat">
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=53c54fa177e2f63ef789a5743b4fba99&action=position&posid=18&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'25',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                   </li>
                 <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                 
               </ul>
           </div>
           <div class="bbb">
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=78c55cda84836f630f6a221431d1e30a&action=category&catid=0&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder DESC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($r[catid]==10) { ?>
               <a href="<?php echo $r['url'];?>">
                   <img src="<?php echo IMG_PATH;?>tysl/jjj.jpg" alt="">
               </a>
            <?php } ?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
           </div>
           <div class="contentmidbot">
               <img src="<?php echo IMG_PATH;?>tysl/tjkc.jpg" alt="">
               <ul class="kkk">
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e78af88e18cb6ec27565edebca633581&action=position&posid=2&order=listorder+DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'25',));}?>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <li>
                       <img src="<?php echo IMG_PATH;?>tysl/xjt.jpg" alt="">
                       <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?>
                       </a>
                   </li>
                 <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
               </ul>
               <div class="mm">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a9d9672abe24f9b0d15f2add5f94a11c&action=category&catid=0&order=listorder++DESC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder  DESC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                 <?php if($r[catid]==12) { ?>
                   <a href="<?php echo $r['url'];?>">
                       <img src="<?php echo IMG_PATH;?>tysl/mm.jpg" alt="">
                   </a>
                   <?php } ?>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </div>
           </div>
       </div>
       <div class="contentright">
           <img src="<?php echo IMG_PATH;?>tysl/jdfc1.jpg" alt="">
           <div class="imfg">
              <div class="immk">
                  <img src="<?php echo IMG_PATH;?>tysl/fc1.jpg" alt="">
                  <img src="<?php echo IMG_PATH;?>tysl/fc2.jpg" alt="">
              </div>
              <ul class="lbd">
                  <li>1</li>
                  <li>2</li>
              </ul>
           </div>
           <p>太原市国防教育训练中心位于太原市尖草坪区拥军路1号。占地15000平米，东临汾河，西依崛围山景区。是山西省规模最大，项目最全的军事训练基地。三星级标准建造的住宿、餐饮、教学、会议... </p>
           <div class="lxmm"> 
               <img src="<?php echo IMG_PATH;?>tysl/lxmm.jpg" alt="">
           </div>
       </div>
       <div class="bottom">
           <img src="<?php echo IMG_PATH;?>tysl/bottom.jpg" alt="">
       </div>
   </div>
</div>
<?php include template("content","footer"); ?>