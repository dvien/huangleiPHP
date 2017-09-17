<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>创特 管理中心 - 修改 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/ct/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/ct/Public/Styles/main.css" rel="stylesheet" type="text/css" />
    <script language="javascript" src="/ct/Public/Js/jquery-1.4.2.min.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U(MODULE_NAME.'/Case/lst');?>">列表</a></span>
    <span class="action-span1"><a href="#">创特 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 修改家装案例 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
    <form method="post" action="<?php echo U(MODULE_NAME.'/Case/save');?>" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $data['id']?>" />
        <table cellspacing="1" cellpadding="3" width="100%">
            <tr>
                <td class="label">所属风格</td>
                <td>
                    <select name="cat_id">
                        <?php foreach($catData as $v): if($v['id'] == $data['cat_id']){ $select ="selected=selected"; }else{ $select = ""; } ?>
                        <option <?php echo $select;?> value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">案例名称</td>
                <td>
                    <input type="text" name="name" maxlength="60" value="<?php echo $data['name']?>" />
                </td>
            </tr>

            <tr>
                <td class="label">现有图片</td>
                <td>
                    <ul>
                    <?php foreach($img as $k=>$v):?>
                    <li pid="<?php echo $v['id']; ?>" style="float:left;list-style-type:none;">
                    <?php echo '<img src= http://localhost/ct/Uploads/'.$v['sm_images'].'>';?>
                        <input type="button" onclick="delLi(this);" value="-" />&nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
                        <?php endforeach;?>

                 </ul>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="label">案例图片</td>
                <td>
                    <input type="file" name="case[]" maxlength="60" value="" /><input onclick="addRow(this);" type="button" value="+" />
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
<script>
    function addRow(o)
    {
        var tr = $(o).parent().parent();
        if($(o).val() == "+")
        {
            var newtr = tr.clone();
            newtr.find(":button").val("-");
            tr.after(newtr);
        }
        else
            tr.remove();
    }
    function delLi(o)
    {
        if(confirm('确定要删除吗'))
        {
            var li = $(o).parent();
            // 获取要删除的图片的id
            var pid = li.attr('pid');
            $.ajax({
                type : "GET",
                url : "/ct/index.php/Home/Case/ajaxDelPic/pid/"+pid,
                success : function(data)
                {
                    // ajax成功之后，再从页面上删除图片
                    li.remove();
                }
            });
        }

    }
</script>