<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>危险化学品 管理中心 - 添加 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/chem/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/chem/Public/Styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    window.UEDITOR_HOME_URL = '/chem/Application/Data/ueditor/';
    window.onload = function(){
        window.UEDITOR_CONFIG.initialFrameWidth =800;
        window.UEDITOR_CONFIG.initialFrameHeight =300;
        UE.getEditor('content');
    }
</script>
<script type="text/javascript" src="/chem/Application/Data/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/chem/Application/Data/ueditor/ueditor.all.min.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U(MODULE_NAME.'/goods/lst');?>">列表</a></span>
    <span class="action-span1"><a href="#">危险化学品 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 添加 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
    <form method="post" action="<?php echo U(MODULE_NAME.'/goods/add');?>" enctype="multipart/form-data" >
        <table cellspacing="1" cellpadding="3" width="100%">
            <tr>
                <td class="label">品名</td>
                <td>
                    <input type="text" name="ch_name" maxlength="60" value="" />
                </td>
            </tr>
            <tr>
                <td class="label">英文名称</td>
                <td>
                    <input type="text" name="en_name" maxlength="60" value="" />
                </td>
            </tr>

            <tr>
                <td class="label">别名</td>
                <td>
                    <input type="text" name="alias" maxlength="60" value="" />
                </td>
            </tr>
            <tr>
                <td class="label">类别</td>
                <td>
                    <select name="status">
                        <option value="爆炸品">爆炸品</option>
                        <option value="气体">气体</option>
                        <option value="易燃液体">易燃液体</option>
                        <option value="易燃固体">易燃、易自燃和遇湿易自燃物质</option>
                        <option value="氧化性物质和有机过氧化物">氧化性物质和有机过氧化物</option>
                        <option value="毒害物质和感染性物质">毒害品和感染性物品</option>
                        <option value="放射性物质">放射性物质</option>
                        <option value="腐蚀性物品">腐蚀性物品</option>
                        <option value="杂项危险物">杂项危险物</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">项目</td>
                <td>
                    <input type="text" name="project" maxlength="60" />
                </td>
            </tr>
            <tr>
                <td class="label">危险货物编号</td>
                <td>
                    <input type="text" name="cas" maxlength="60" size="40" value="" />
                </td>
            </tr>

            <tr>
                <td class="label">生产厂家</td>
                <td>
                    <input type="text" name="factory" maxlength="60" size="40" value="" />
                </td>
            </tr>
            <tr>
                <td class="label">出厂日期</td>
                <td>
                    <input type="text" name="datatime" maxlength="60" size="40" value="" />
                </td>
            </tr>
            <tr>
                <td class="label">详细信息</td>
                <td>
                    <textarea name="content" id="content"></textarea>
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
    危险化学品 管理中心<br />
    版权所有 &copy; 2016 广西大学实验室，并保留所有权利。</div>
</body>
</html>
<script>
    var area = [
        ['朝阳' , '海淀' , '三里屯'],['哈尔滨' , '阿城' , '双城']
    ];
    function ld(){
        var ld = document.getElementById('prov');
        if(ld.value == -1){
            document.getElementById('city').innerHTML = obt;
            return;
        }
        var len = area[ld.value].length;
        var obt ="";
        for(var i=0;i<len;i++){
            obt = obt + '<option value='+area[ld.value][i]+'>'+area[ld.value][i]+'</option>';
        }
        document.getElementById('city').innerHTML = obt;
    }
</script>