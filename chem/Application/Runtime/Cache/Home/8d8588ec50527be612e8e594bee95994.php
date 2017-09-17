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
    <span id="search_id" class="action-span1"> - 已结算清单 </span>
    <div style="clear:both"></div>
</h1>
<div class="form-div">
    <form action="<?php echo U(MODULE_NAME.'/Apply/clearlst1');?>" name="searchForm" method="get">
        <img src="/chem/Public/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
        <span>请输入负责教师:</span><input type="text" name="un" size="15" value="<?php echo $_GET['un']?>"/>
        <input type="submit" value=" 搜索 " class="button" />
    </form>
</div>
<form method="post" action="<?php echo U(MODULE_NAME.'/Apply/bdel');?>" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>

                <th>序号</th>
                <th>申领品名(规格)</th>
                <th>领用人</th>
                <th style="color:red;">负责教师</th>
                <th>领取时间</th>
                <th>领取数量</th>
                <th>总计</th>

            </tr>
            <?php foreach($data as $v): if($v['status']==0) continue; $price +=$v['price']; $count += $v['stock']; ?>
            <tr>

                <td align="center"><?php echo $v['id'];?></td>
                <td align="center">
                    <?php
 foreach($goods as $k){ if($v['stock_id'] == $k['id']){ echo $k['goods_name'].'('.$k['size'].')'; } } ?>
                </td>
                <td align="center"><?php echo $v['leader'];?></td>
                <td align="center" style="color:red;"><?php echo $v['operator'];?></td>
                <td align="center"><?php echo date("Y-m-d H:i:s",$v['time']);?></td>
                <td align="center"><?php echo $v['stock']?></td>
                <td align="center"><?php echo $v['price'].'元';?></td>

            <?php endforeach;?>
            <tr>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td align="center" style="color:red;font-weight: bold">数量总计:<?php echo $count;?></td>
                <td align="center" style="color:red;font-weight: bold">金额总计:<?php echo $price;?></td>
            </tr>

        </table>
    </div>
</form>

<div id="footer">
    危险化学品 管理中心<br />
    版权所有 &copy; 2016 广西大学实验室，并保留所有权利。</div>
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