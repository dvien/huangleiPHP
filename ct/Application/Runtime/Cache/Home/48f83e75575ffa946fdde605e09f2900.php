<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>创特 管理中心 - 列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/ct/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/ct/Public/Styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/ct/Public/Js/jquery-1.4.2.min.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U(MODULE_NAME.'/Active/add');?>">添加</a></span>
    <span class="action-span1"><a href="#">创特 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 资讯列表 </span>
    <div style="clear:both"></div>
</h1>
<form method="post" action="<?php echo U(MODULE_NAME.'/Active/bdel');?>" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th width="40"><input  onclick="t()" id="checkbox" type="checkbox"/></th>
                <th width="60">序号</th>
                <th>标题</th>
                <th>摘要</th>
                <th>类别</th>
                <th>是否启用‘hot’标记</th>
                <th>是否置顶</th>
                <th style="width:100px;">时间</th>
                <th>封面图片</th>
                <th>描述</th>
                <th width="100">操作</th>
            </tr>
            <?php foreach($data as $v):?>
            <tr>
                <td align="center">
                    <input class="check" type="checkbox" name="dels[]" value="<?php echo $v['id']?>"/>
                </td>
                <td align="center"><?php echo $v['id'];?></td>
                <td align="center"><?php echo $v['title']?></td>
                <td align="center"><?php echo $v['summary']?></td>
                <td align="center"><?php echo $v['cat']?></td>
                <td align="center" ><?php
 if($v['mark'] == 1){ echo "<span style='color:red;font-weight:bold;'>已启用</span>"; }else{ echo '未启用'; } ?></td>
                <td align="center"><?php
 if($v['top'] == 1){ echo "<span style='color:red;font-weight:bold;'>已置顶</span>"; }else{ echo '未置顶'; } ?></td>
                <td align="center"><?php echo date("Y-m-d H:i:s",$v['time']);?></td>
                <td align="center"><img src="/ct/Uploads/<?php echo $v['images'];?>"></td>
                <td align="center"><?php echo $v['content']?></td>
                <td align="center">
                    <a href="<?php echo U(MODULE_NAME.'/Active/save',array('id'=>$v['id']));?>" title="编辑">编辑</a>
                    |
                    <a onclick="return confirm('确定要删除吗？');" href="<?php echo U(MODULE_NAME.'/Active/del',array('id'=>$v['id']));?>" title="移除">移除</a>
                </td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td><input onclick="return confirm('确定要删除吗？');" type="submit" value="删除所选" /></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</form>

<div id="footer">
共执行 3 个查询，用时 0.021251 秒，Gzip 已禁用，内存占用 2.194 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
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