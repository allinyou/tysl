<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>tysl/servive.css">
<!-- 关于公司 -->
<div class="aboutusbox">
    <div class="aboutus">
        <div class="aboutusleft">
             <ul class="gsln">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f748e5cff961b439ddcb0dff0f5b6fc2&action=category&catid=%24parentid&num=5&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'order'=>'id DESC','limit'=>'5',));}?>
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
                     <ul class="imgbbox">                   
                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=90ab1ba11653af74217704788b878087&action=lists&catid=%24catid&num=6&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                       <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                       <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt=""></a><span><?php echo $r['title'];?></span></li> 
                       <?php $n++;}unset($n); ?>
                       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                                   
                    </ul> 
                    <div id="pages" class="text-c"><?php echo $pages;?></div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>