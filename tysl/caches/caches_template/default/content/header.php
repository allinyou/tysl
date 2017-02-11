<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公司简介-太原市晟浪博通企业管理咨询有限公司</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>tysl/base.css"> 
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>tysl/index.css">
    <script src="<?php echo JS_PATH;?>tysl/animate.js"></script>
    <script src="<?php echo JS_PATH;?>tysl/function.js"></script>
    <script src="<?php echo JS_PATH;?>tysl/jquery.js"></script>
    <script src="<?php echo JS_PATH;?>tysl/index.js"></script>
</head>
<body>
<!-- 头部 -->
<div class="head">
   <img src="<?php echo IMG_PATH;?>tysl/head.jpg" alt="">
</div>
<!-- banner -->
<div class="bn">
    <div class="ngtionbox">
        <ul class="ngtion">
            <li class="first"><a href="<?php echo siteurl($siteid);?>">首页</a></li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=165a22cd9f99194c81648b38a88d0029&action=category&catid=0&num=25&order=views++DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'views  DESC','limit'=>'25',));}?> 
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <li class="dh"><?php echo $r['catname'];?> 
                       <div class="con">
                       <div class="bb"></div>
                       <ul class="box">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2f328e201173d6e86ec8d85477f5642c&action=category&catid=%24r%5Bcatid%5D&siteid=%24siteid&num=25&order=views++DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'views  DESC','limit'=>'25',));}?> 
                               <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                                   <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                               <?php $n++;}unset($n); ?>           
                           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                       </ul>
                       <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['image'];?>" alt=""></a>
                       </div>  
                 </li>                  
               <?php $n++;}unset($n); ?>           
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>      
        </ul>
    </div>
    <div class="banner">
       <img src="<?php echo IMG_PATH;?>tysl/bn1.jpg" alt="">
       <ul class="uls1">
           <li class="hot"></li>
           <li></li>
           <li></li>
           <li></li>
       </ul>
    </div>
</div>  
<!-- 欢迎进入本站 -->
<div class="web">
    <div class="webbox"><img src="<?php echo IMG_PATH;?>tysl/web.jpg" alt=""></div>
</div>