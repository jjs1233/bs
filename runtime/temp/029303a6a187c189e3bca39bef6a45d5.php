<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\HTML\bs\public/../application/index\view\info\class_info.html";i:1509687307;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
	学生信息管理平台
</title><link href="CSS/StudentStyle.css" rel="stylesheet" type="text/css" />
<link href="CSS/jbox.css" rel="stylesheet" type="text/css" />
<link href="CSS/ks.css" rel="stylesheet" type="text/css" />
    <script src="JS/jBox/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="JS/jBox/jquery.jBox-2.3.min.js" type="text/javascript"></script>
    <script src="JS/jBox/i18n/jquery.jBox-zh-CN.js" type="text/javascript"></script>
    <script src="JS/Common.js" type="text/javascript"></script>
    <script src="JS/Data.js" type="text/javascript"></script>
    <script type="text/javascript">
        $().ready(function () {
            setStudMsgHeadTabCheck();
            showUnreadSysMsgCount();
        });

        //我的信息头部选项卡
        function setStudMsgHeadTabCheck() {
            var currentUrl = window.location.href;
            currentUrl = currentUrl.toLowerCase();
            var asmhm = "";
            $("#ulStudMsgHeadTab li").each(function () {
                asmhm = $(this).find('a').attr("href").toLowerCase();
                if (currentUrl.indexOf(asmhm) > 0) {
                    $(this).find('a').attr("class", "tab1");
                    return;
                }
            });
        }

        //显示未读系统信息
        function showUnreadSysMsgCount() {
            var unreadSysMsgCount = "0";
            if (Number(unreadSysMsgCount) > 0) {
                $("#unreadSysMsgCount").html("(" + unreadSysMsgCount + ")");
            }
        }

        //退出
        function loginOut() {
            if (confirm("确定退出吗？")) {
                StudentLogin.loginOut(function (data) {
                    if (data == "true") {
                        window.location = "/Login.aspx";
                    }
                    else {
                        jBox.alert("退出失败！", "提示", new { buttons: { "确定": true} });
                    }
                });
            }
        }
        //更改报考类别
        function changeCateory(thisObj, id) {
            var oldCateoryId = $("#cateoryId").val();
            var cateoryId = "";
            if (id != null) {
                cateoryId = id;
            }
            else {
                cateoryId = thisObj.val();
            }
            var studentId = $("#studentId").val();
            if (cateoryId.length <= 0) {
                jBox.tip("报考类别不能为空！");
                if (id == null) {
                    thisObj.val(oldCateoryId);
                }
            }
            else {
                studentInfo.changeStudentCateory(cateoryId, function (data) {
                    var result = $.parseJSON(data);
                    if ((String(result.ok) == "true")) {
                        window.location.href = "/Index.aspx";
                    }
                    else {
                        jBox.tip(result.message);
                    }
                });
            }
        }
    </script>
    
    <script type="text/javascript">
        //学生投诉异议
        function onSaveProblem() {
            var studentId = $("#studentId").val();
            var workAssess = $('input[name="workAssess"]:checked').val();
            var problemContent = $("#problemContent").val();
            var problemType = $('input[name="problemType"]:checked').val();
            var problemTypeStr = "学生";
            switch (problemType) { 
                case "4": problemTypeStr+="提问"; break;
                case "3": problemTypeStr += "意见"; break;
                case "1": problemTypeStr += "投诉"; break;
                default: break;
            }

            if (problemContent.length <= 0) {
                jBox.tip("请填写问题反馈的内容！");
                return false;
            }
            else {
                problemContent = "工作评价：" + workAssess + "，" + problemContent;
                StudentCompain.insertCompain(studentId, problemTypeStr, problemType, problemContent, function (data) {
                    var obj = $.parseJSON(data);
                    if (obj.ok == true) {
                        jBox.alert(obj.message, "提示");
                        setTimeout(function () {
                            window.location.reload();
                        }, 1500);
                    }
                    else {
                        jBox.tip(obj.message);
                    }
                });
            }
        }
    </script>
</head>
<body>

    <div class="banner">
        <div class="bgh">
            <div class="page">
                <div id="logo">
                    <a href="#">
                        <img src="IMAGE/Student/logo.gif" alt="" width="165" height="48" />
                    </a>
                </div>
                <div class="topxx">
                    <select onchange="changeCateory($(this))" style="font-size: 11px; background: #4991cf;
                        color: #fff;">
                        
                        <option 
                            value="4">
                            远程</option>
                        
                        <option selected='selected'
                            value="1">
                            自考</option>
                        
                    </select>
                    910513201419学员：邹智，欢迎您！ <a href="Index.aspx.html">我的信息</a> <a href="#">
                        通知</a> <a href="#">密码修改</a> <a onclick="loginOut()"
                            href="javascript:">安全退出</a>
                </div>
                <div class="blog_nav">
                    <ul>
                        <li><a href="INFO/basic">我的信息</a></li>
                        <li><a href="EDU/index">教务中心</a></li>
                        <li><a href="FINANCE/index">财务中心</a></li>
                        <li><a href="HONOR/index">奖惩情况</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="box mtop">
            <div class="leftbox">
                <div class="l_nav2">
                    <div class="ta1">
                       <strong>个人中心</strong>
                        <div class="leftbgbt">
                        </div>
                    </div>
                    <div class="cdlist">
                        <div>
                            <a href="INFO/basic">我的信息</a></div>
                        <div>
                            <a href="INFO/class_info">班级信息 </a>
                        </div>
                        <div>
                            <a href="INFO/honest">诚信档案</a></div>
                        <div>
                            <a href="INFO/special">特殊情况</a></div>
                    </div>
                    <div class="ta1">
                        <strong>教务中心</strong>
                        <div class="leftbgbt2">
                        </div>
                    </div>
                    <div class="cdlist">
                        <div>
                            <a href="EDU/lesson">我的课程</a></div>
                        <div>
                            <a href="EDU/grade">学分情况</a></div>
                        </div>
                    <div class="ta1">
                        <strong>财务中心</strong><div class="leftbgbt2">
                        </div>
                    </div>
                    <div class="cdlist">
                        <div>
                            <a href="FINANCE/work">勤工助学</a></div>
                        <div>
                            <a href="FINANCE/subsidy">经济补助</a></div>
                    </div>
                   
                    <div class="ta1">
                        <strong>奖惩情况</strong><div class="leftbgbt2">
                        </div>
                    </div>
                    <div class="cdlist">
                        <div>
                            <a href="HONOR/award">获奖记录</a></div>
                        <div>
                            <a href="HONOR/punish">处分记录</a></div>
                    </div>
<div class="ta1">
                        <strong>教学系统</strong>
                        <div class="leftbgbt2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightbox">
                

<h2 class="mbx">我的信息 &gt; 班级信息&nbsp;&nbsp;&nbsp;</h2>  
<div class="morebt">
    

<ul id="ulStudMsgHeadTab">
    <li><a class="tab2" onclick="" href="INFO/basic">个人资料</a> </li>
    <li><a class="tab2" onclick="" href="INFO/class_info">班级信息</a></li>
    <li><a class="tab2" onclick="" href="INFO/honest">诚信档案</a></li>
    <li><a class="tab2" onclick="" href="INFO/special">特殊情况<span style="color:#ff0000; padding-left:5px;" id="unreadSysMsgCount"></span></a></li>
</ul>

</div>
<div class="cztable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td width="91" align="right">班级名称：</td>
            <td colspan="5"><?php echo $pro['name']; ?>&nbsp;</td>
        </tr>
        <tr>
            <td align="right">班级QQ群：</td>
            <td colspan="5"><?php echo $pro['QQ']; ?> &nbsp;</td>
        </tr>
        <tr>
            <td align="right">班级宣传语：</td>
            <td colspan="5"><?php echo $pro['slogan']; ?>&nbsp;</td>
        </tr>        
            <tr>
                    <td align="right"><div align="right">班主任老师：</div></td>
                    <td><div align="left"><?php echo $pro['teacher']; ?></div></td>
                    <td><div align="right">电话：</div></td>
                    <td><div align="left"><?php echo $pro['phone']; ?></div></td>
            </tr>
    </table>
</div>

            </div>
        </div>
        <div class="footer">
            <p>
                &copy;copyright 2017 乐佶雨</p>
        </div>
    </div>
</body>
</html>
