<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TVX 管理中心</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/tvx/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/tvx/Public/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span1"><a href="#">TVX 管理中心</a> </span>
    <span id="search_id" class="action-span1"></span>
    <div style="clear:both"></div>
</h1>
<div class="list-div">
    <table cellspacing='1' cellpadding='3'>
        <tr>
            <th colspan="4" class="group-title"><strong style="color:red">已有经销商：</strong></th>
        </tr>
        <?php foreach($jsx as $v): ?>
        <tr>
            <td width="25%"><?php echo $v['cat_name']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
<!-- end order statistics -->
<br />
<!-- start goods statistics -->
<div class="list-div">
    <table cellspacing='1' cellpadding='3'>
        <tr>
            <th colspan="4" class="group-title"><strong style="color:red">已有物业：</strong></th>
        </tr>
        <?php foreach($wy as $v): ?>
        <tr>
            <td width="25%"><?php echo $v['cat_name']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
<!-- end order statistics -->
<br />
<!-- start system information -->
<div class="list-div">
    <table cellspacing='1' cellpadding='3'>
        <tr>
            <th colspan="4" class="group-title"><strong style="color:red">已有业主：</strong></th>
        </tr>
        <?php foreach($yz as $v): ?>
        <tr>
            <td width="25%"><?php echo $v['cat_name']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
<div id="footer">
TVX 管理中心<br />
版权所有 &copy; TVX，并保留所有权利。</div>
</body>
</html>