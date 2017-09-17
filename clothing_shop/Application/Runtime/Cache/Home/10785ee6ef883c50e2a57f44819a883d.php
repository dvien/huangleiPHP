<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Clothing Shop 管理中心 - 列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/clothing_shop/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/clothing_shop/Public/Styles/main.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/clothing_shop/Public/Js/jquery-1.4.2.min.js"></script>
</head>
<body>
<h1>
    <span class="action-span1"><a href="#">Clothing Shop 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 列表 </span>
    <div style="clear:both"></div>
</h1>
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th>id</th>
                <th>用户名</th>
                <th>评论商品</th>
                <th>评论内容</th>
                <th>评论时间</th>
                <th>操作</th>
            </tr>
            <?php foreach ($messageData as $k => $v): ?>
            <tr>
                <td align="center"><?php echo $v['id']?></td>
                <td align="center"><?php echo $v['username'];?></td>
                <td align="center"><?php echo $v['goods_name'];?></td>
                <td align="center"><?php echo $v['message'];?></td>
                <td align="center"><?php echo $v['time'];?></td>

                <td align="center">
                    <a onclick="return confirm('确定要删除吗？');" href="<?php echo U(MODULE_NAME.'/message/del',array('id'=>$v['id']));?>" title="编辑">移除</a>
                </td>
            </tr>
           	<?php endforeach; ?>

        </table>
    </div>


<div id="footer">
    CopyRight &copy; 版权归 Clothing Shop 所有。
</div>
</body>
</html>
<script>
    function t(){
        var a = document.getElementsByClassName('check');
        var b = document.getElementById('checkbox');
        if(b.checked==true){
            for(var i=0;i<a.length;i++){
                a[i].checked = true;
            }
        }else{
            for(var i=0;i<a.length;i++){
                a[i].checked = false;
            }
        }

    }
</script>