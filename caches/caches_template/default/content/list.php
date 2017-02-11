<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>tysl/aboutus.css">
<!-- 关于公司 -->
<div class="aboutusbox">
    <div class="aboutus">
        <div class="aboutusleft">
             <ul class="gsln">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ccf443ccbdd049927ccd53fdce3fd8b&action=category&catid=%24parentid&num=25&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'order'=>'id DESC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>                  
                   <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
             <img src="<?php echo IMG_PATH;?>tysl/lxmm.jpg" alt="">
        </div>
        <div class="aboutusright">
              <div class="righttt"><span><?php echo $catname;?></span>
              <span  style="display:block;float:right;"><a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt;</span><?php echo catpos($catid);?></span>
              </div>
              <!-- 显示内容 -->
              <p>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ebdb0603a717237b35ed90c670e7f367&action=lists&catid=%24catid&num=12&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                      <?php echo $r['content'];?>
                  <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
             </p>
              
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>