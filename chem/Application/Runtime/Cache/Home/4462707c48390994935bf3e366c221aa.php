<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>广西大学化学药品管理系统</title>

<link href="/chem/Public/Index/css/index.css" rel="stylesheet" type="text/css">
<link href="/chem/Public/Index/css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="all">
	<div class="header">
    	<div class="logo">
        	<div class="logo-left">
            	<img src="/chem/Public/Index/images/logo.png" alt="广西大学" style="float:left">
                <p style="float:left">/<span>危险物品管理系统</span></p>
            </div>
            <div class="logo-right">
            	<p><a href="<?php echo U(MODULE_NAME.'/Login/login');?>" style="text-decoration: none">安全登录</a></p>
            </div>
        </div>
    </div>

    <div class="intro">
       
        <ul>
        	<li><img src="/chem/Public/Index/images/shouye.png" alt="" style="float:left; width:40px; margin-top:5px;"><a href="<?php echo U(MODULE_NAME.'/Index/index');?>">首页>></a></li>
            <li><img src="/chem/Public/Index/images/biaoji.png" style="float:left; margin-top:5px; ">文章列表</li>
        </ul>
        
        <p class="caption"><?php echo $msg['title'];?></p>
        <p class="author">
           <span><?php echo date("Y-m-d H:i:s",$msg['time']);?></span>
           <span>作者：管理员</span>
        </p>
    </div>
    
    <div class="container">
        <?php echo html_entity_decode($msg['content']);?>
    </div>
    
    <div class="footer">
    	<div class="text">
            <p>广西大学 危险化学品管理中心</p>
            <p>版权所有 &copy; 2016 广西大学实验室，并保留所有权利。</p>
        </div>
    </div>
</div>
</body>
</html>