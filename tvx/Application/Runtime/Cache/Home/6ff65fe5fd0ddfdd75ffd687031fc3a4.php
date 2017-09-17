<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TXV 管理中心 - 修改 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/tvxManage/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/tvxManage/Public/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U(MODULE_NAME.'/Admin/lst');?>">列表</a></span>
    <span class="action-span1"><a href="#">TXV 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 修改 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
    <form method="post" action="<?php echo U(MODULE_NAME.'/Admin/save');?>" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $data['id']?>" />
        <table cellspacing="1" cellpadding="3" width="100%">
            <tr>
                <td class="label">角色</td>
                <td>
                    <select name="role_id">
                        <?php foreach($roleData as $v): if($v['id'] == $data['role_id']) $select = "selected = selected"; else $select = ''; ?>
                        <option <?php echo $select;?> value="<?php echo $v['id']?>"><?php echo $v['cat_name']?></option>
                        <?php endforeach;?>
                    </select>

                </td>
            </tr>

            <tr>
                <td class="label">用户名</td>
                <td>
                    <input type="text" name="username" maxlength="60" value="<?php echo $data['username']?>" />
                </td>
            </tr>
            <tr>
                <td class="label">密码</td>
                <td>
                    <input type="password" name="password" maxlength="60" size="40" value="" />
                    <span>*密码为空，默认为不修改</span>
                </td>

            </tr>
            <tr>
                <td class="label">真实姓名</td>
                <td>
                    <input type="text" name="name" maxlength="60" size="40" value="<?php echo $data['name']?>" />
                </td>
            </tr>
            <tr>
                <td class="label">手机号</td>
                <td>
                    <input type="text" name="phone" maxlength="60" size="40" value="<?php echo $data['phone']?>" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br />
                    <input type="submit" class="button" value=" 确定 " />
                    <input type="reset" class="button" value=" 重置 " />
                </td>
            </tr>
        </table>
    </form>
</div>

<div id="footer">
    TVX 管理中心<br />
    版权所有 &copy; TVX，并保留所有权利。</div>
</body>
</html>