<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\HTML\bs\public/../application/index\view\edu\lesson.html";i:1509687274;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生信息管理平台</title>
<link href="CSS/StudentStyle.css" rel="stylesheet" type="text/css" />
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
                console.log(currentUrl);
                console.log(asmhm);
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
        function submitMail() {
            var mtitle = "联系方式有修改";
            var html = "<div style='padding:10px;'><div style='width:65px; height:120px; float:left;'>修改的地方：</div><div style='width:250px; height:120px; float:left;'><textarea id='objeCont' name='objeCont' style='width:250px; height:105px;'></textarea></div></div>";

            var submit = function (v, h, f) {
                if (f.objeCont == '' || f.objeCont.length > 80) {
                    $.jBox.tip("请您输入有修改的地方，且不超过80个字！", 'error', { focusId: "objeCont" }); // 关闭设置 objeCont 为焦点
                    return false;
                }

                StudentCompain.insertCompain('', mtitle, 5, f.objeCont, function (data) {
                    var obj = $.parseJSON(data);
                    var resultObj = false;
                    if (obj.ok) {
                        $.jBox.tip("成功提交联系方式的修改邮件！");
                    }
                });
            };

            $.jBox(html, { title: "联系方式修改的邮件", submit: submit });
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
                    910513201419学员：邹智，欢迎您！ <a href="#">我的信息</a> <a href="#">
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
                
<h2 class="mbx">教务中心 &gt; 我的课程 &nbsp;&nbsp;&nbsp;</h2>       
<div class="morebt">
    

<ul id="ulStudMsgHeadTab">
    <li><a class="tab2" onclick="" href="EDU/lesson">我的课程</a> </li>
    <li><a class="tab2" onclick="" href="EDU/grade">学分情况</a></li>
</ul>

</div>
<div class="cztable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%" style="text-align:center">
        <tr align="center">
            <th width="10%">时间</th>
            <th width="18%">星期一</th>
            <th width="18%">星期二</th>
            <th width="18%">星期三</th>
            <th width="18%">星期四</th>
            <th width="18%">星期五</th>
        </tr>

        <tr height="50px">
            <td>上午一</td>
            <td><?php echo $pro['am_1'][0]; ?></td>
            <td><?php echo $pro['am_1'][1]; ?></td>
            <td><?php echo $pro['am_1'][2]; ?></td>
            <td><?php echo $pro['am_1'][3]; ?></td>
            <td><?php echo $pro['am_1'][4]; ?></td>
        </tr>
   
        <tr height="50px">
            <td>上午二</td>
            <td><?php echo $pro['am_2'][0]; ?></td>
            <td><?php echo $pro['am_2'][1]; ?></td>
            <td><?php echo $pro['am_2'][2]; ?></td>
            <td><?php echo $pro['am_2'][3]; ?></td>
            <td><?php echo $pro['am_2'][4]; ?></td>
        </tr>    

        <tr height="50px">
            <td>上午三</td>
            <td><?php echo $pro['am_3'][0]; ?></td>
            <td><?php echo $pro['am_3'][1]; ?></td>
            <td><?php echo $pro['am_3'][2]; ?></td>
            <td><?php echo $pro['am_3'][3]; ?></td>
            <td><?php echo $pro['am_3'][4]; ?></td>
        </tr>

        <tr height="50px">
            <td>下午一</td>
            <td><?php echo $pro['pm_1'][0]; ?></td>
            <td><?php echo $pro['pm_1'][1]; ?></td>
            <td><?php echo $pro['pm_1'][2]; ?></td>
            <td><?php echo $pro['pm_1'][3]; ?></td>
            <td><?php echo $pro['pm_1'][4]; ?></td>
        </tr>

        <tr height="50px">
            <td>下午二</td>
            <td><?php echo $pro['pm_2'][0]; ?></td>
            <td><?php echo $pro['pm_2'][1]; ?></td>
            <td><?php echo $pro['pm_2'][2]; ?></td>
            <td><?php echo $pro['pm_2'][3]; ?></td>
            <td><?php echo $pro['pm_2'][4]; ?></td>
        </tr>

        <tr height="50px">
            <td>晚上一</td>
            <td><?php echo $pro['eve_1'][0]; ?></td>
            <td><?php echo $pro['eve_1'][1]; ?></td>
            <td><?php echo $pro['eve_1'][2]; ?></td>
            <td><?php echo $pro['eve_1'][3]; ?></td>
            <td><?php echo $pro['eve_1'][4]; ?></td>
        </tr>

        <tr height="50px">
            <td>晚上二</td>
            <td><?php echo $pro['eve_2'][0]; ?></td>
            <td><?php echo $pro['eve_2'][1]; ?></td>
            <td><?php echo $pro['eve_2'][2]; ?></td>
            <td><?php echo $pro['eve_2'][3]; ?></td>
            <td><?php echo $pro['eve_2'][4]; ?></td>
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