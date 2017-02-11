<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>tysl/aboutus.css">
<!-- 关于公司 -->
<div class="aboutusbox">
    <div class="aboutus">
        <div class="aboutusleft">
             <ul class="gsln">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b587c0192fa81565fc77a5aea7f56b12&action=category&catid=%24catid&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'id DESC','limit'=>'10',));}?>
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
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6b6f14504376837a016d3e00fcda7952&action=category&catid=%24catid&num=1&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'id DESC','limit'=>'1',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                      <div><?php echo $r['title'];?></div>
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6479bcf62c14321181bd7d77bf49bd94&action=lists&catid=%24r%5Bcatid%5D&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
                          <!-- moreinfo能使读取category读取list内容 -->
                          <?php $n=1;if(is_array($data)) foreach($data AS $k) { ?>                              
                              <?php echo $k['content'];?>  
                          <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </p>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>