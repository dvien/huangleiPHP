<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>创特 管理中心 - 修改 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/ct/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/ct/Public/Styles/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        window.UEDITOR_HOME_URL = '/ct/Application/Data/ueditor/';
        window.onload = function(){
            window.UEDITOR_CONFIG.initialFrameWidth =800;
            window.UEDITOR_CONFIG.initialFrameHeight =300;
            window.UEDITOR_CONFIG.savePath= ['upload','upload1'];
            window.UEDITOR_CONFIG.imageUrl = "<?php echo U(MODULE_NAME.'/Company/upload');?>";
            window.UEDITOR_CONFIG.imagePath = '/ct/Uploads/';
            UE.getEditor('content');
        }
    </script>
    <script type="text/javascript" src="/ct/Application/Data/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/ct/Application/Data/ueditor/ueditor.all.min.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U(MODULE_NAME.'/Employ/lst');?>">列表</a></span>
    <span class="action-span1"><a href="#">创特 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 修改招聘描述 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
    <form method="post" action="<?php echo U(MODULE_NAME.'/Employ/save');?>" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $data['id']?>" />
        <table cellspacing="1" cellpadding="3" width="100%">

            <tr>
                <td class="label">招聘描述</td>
                <td>
                    <textarea name="content" id="content"><?php echo $data['content']?></textarea>
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
共执行 1 个查询，用时 0.018952 秒，Gzip 已禁用，内存占用 2.197 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>