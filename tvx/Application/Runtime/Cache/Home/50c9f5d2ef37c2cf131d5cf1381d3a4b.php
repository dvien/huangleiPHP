<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TVX 管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/tvx/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/tvx/Public/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body style="background: #278296;color:white">
<form method="post" action="<?php echo U(MODULE_NAME.'/Login/login');?>" onsubmit="return validate()">
    <table cellspacing="0" cellpadding="0" style="margin-top:100px" align="center">
        <tr>
            <td>
                <img src="/tvx/Public/Images/logo1.png" width="180" height="70" border="0" alt="ECSHOP" />
            </td>
            <td style="padding-left: 50px">
                <table>
                    <tr>
                        <td>管理员姓名：</td>
                        <td>
                            <input type="text" name="username" />
                        </td>
                    </tr>

                    <tr>
                        <td>管理员密码：</td>
                        <td>
                            <input type="password" name="password" />
                        </td>

                    </tr>
                    <tr>
                        <td>身份：</td>
                        <td>
                            <select name="role">
                                <option value="0">管理员</option>
                                <option value="1">经销商</option>
                                <option value="2">物业</option>
                                <option value="3">业主</option>
                            </select>
                            <span style="color:red">* 请选择您的身份</span>
                        </td>
                    </tr>
                    <tr>
                        <td>验证码：</td>
                        <td>
                            <input type="text" name="code" class="capital" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="right">
                            <img onclick="this.src='<?php echo U(MODULE_NAME.'/Login/verify');?>?Math.random();'" style="cursor:pointer;" src="<?php echo U(MODULE_NAME.'/Login/verify');?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" value="进入管理中心" class="button" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
  <input type="hidden" name="act" value="signin" />
</form>
</body>