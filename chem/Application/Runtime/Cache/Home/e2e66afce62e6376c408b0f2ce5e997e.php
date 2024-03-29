<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>危险化学品 管理中心 - 列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/chem/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/chem/Public/Styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/chem/Public/Js/jquery-1.4.2.min.js"></script>
</head>
<body>
<h1>

    <span class="action-span1"><a href="#">危险化学品 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 申领进度查询列表 </span>
    <div style="clear:both"></div>
</h1>

<form method="post" action="<?php echo U(MODULE_NAME.'/rules/bdel');?>" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>

                <th>序号</th>
                <th>申领品名(规格)</th>
                <th>使用单位</th>
                <th>用途</th>
                <th style="color:red;font-weight:bold">是否剧毒</th>
                <th>申领人</th>
                <th>联系电话</th>

                <th>负责老师</th>

                <th>申领时间</th>
                <th>申领数量</th>
                <th>单价</th>
                <th>总计</th>
                <th>状态</th>
                <th>当前处理人</th>
                <th>当前节点</th>

            </tr>
            <?php foreach($data as $v):?>
            <tr>

                <td align="center"><?php echo $v['id'];?></td>
                <td align="center">
                    <?php
 foreach($goods as $k){ if($v['stock_id'] == $k['id']){ echo $k['goods_name'].'('.$k['size'].')'; } } ?>
                </td>
                <td align="center"><?php echo $v['sector'];?></td>
                <td align="center"><?php echo $v['use'];?></td>
                <td align="center" style="color:red;font-weight:bold"><?php
 foreach($goods as $k){ if($v['stock_id'] == $k['id']){ echo $k['style']; } } ?></td>

                <td align="center"><?php echo $v['app_name'];?></td>
                <td align="center"><?php echo $v['app_phonenum'];?></td>

                    <td align="center"><?php echo $v['teacher'];?></td>

                <td align="center"><?php echo date("Y-m-d H:i:s",$v['time']);?></td>
                <td align="center"><?php echo $v['stock'];?></td>
                <td align="center"><?php
 foreach($goods as $k){ if($v['stock_id'] == $k['id']){ echo $k['price'].'元'; } } ?></td>
                <td align="center"><?php
 foreach($goods as $k){ if($v['stock_id'] == $k['id']){ echo $k['price'] * $v['stock'].'元'; } } ?></td>
                <!-- 显示出 当前审批状态-->
                <td align="center" style="color:red;">
                    <?php
 if($v['status'] == 0){ echo '已通过'; }else if($v['status'] == 4){ echo '已拒绝'.'(理由:'.$v['reason'].')'; }else{ echo '审核中'; } ?>
                </td>
                <td align="center">
                    <?php
 if($v['status']==3){ $name = M('admin')->field('name')->find($v['student_id']); echo $name['name']; }else if($v['status']==2){ $name = M('admin')->field('name')->find($v['teacher_id']); echo $name['name']; }else if($v['status']==1 && $v['charge_id'] != 0){ $name = M('admin')->field('name')->find($v['charge_id']); echo $name['name']; }else if($v['status']==0){ $name = M('admin')->field('name')->find($v['admin_id']); echo $name['name']; }else if($v['status']==4){ $name = M('admin')->field('name')->find($v['refuse_id']); echo $name['name']; }else if($v['status']==1 && $v['charge_id'] == '0'){ $name = M('admin')->field('name')->find($v['teacher_id']); echo $name['name']; }else{ echo '正在处理'; } ?>
                </td>
                <td align="center">
                    <?php
 if($v['status'] == 1){ echo '管理员'; }else if($v['status'] == 2){ echo '主管'; }else if($v['status'] == 3){ echo '老师'; }else if($v['status'] == 4){ echo '已拒绝'; }else if($v['status'] == 0){ echo '已通过'; } ?>
                </td>

            </tr>
            <?php endforeach;?>

        </table>
    </div>
</form>

<div id="footer">
    危险化学品 管理中心<br />
    版权所有 &copy; 2016 广西大学实验室，并保留所有权利。</div>
</body>
</html>