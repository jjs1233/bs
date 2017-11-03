<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\HTML\bs\public/../application/index\view\info\basic.html";i:1509687305;}*/ ?>
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
                    
    <h2 class="mbx">我的信息 &gt; 个人资料 &nbsp;&nbsp;&nbsp;</h2>       
    <div class="morebt">
        

    <ul id="ulStudMsgHeadTab">
        <li><a class="tab2" onclick="" href="INFO/basic">个人资料</a> </li>
        <li><a class="tab2" onclick="" href="INFO/class_info">班级信息</a></li>
        <li><a class="tab2" onclick="" href="INFO/honest">诚信档案</a></li>
        <li><a class="tab2" onclick="" href="INFO/special">特殊情况<span style="color:#ff0000; padding-left:5px;" id="unreadSysMsgCount"></span></a></li>
    </ul>

    </div>
    <div class="cztable">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td align="right" width="80">姓名：</td>
                <td><?php echo $pro['name']; ?>&nbsp;</td>
                <td align="right" width="90">身份证号码：</td>
                <td><?php echo $pro['ID_x']; ?>&nbsp;</td>
                
                <td rowspan="9"><div align="center"><img id="pic_face"  height="160" width="120" src="IMAGE/Student/photo.jpg"/ style="padding:2px 2px 5px; border:1px #ddd solid;"></div>&nbsp;</td>
            </tr>
            <tr>
                <td align="right">性别：</td>
                <td><?php echo $pro['sex']; ?>&nbsp;</td>
                <td align="right">出生日期：</td>
                <td><?php echo $pro['birth']; ?>&nbsp;</td>
            </tr>
            <tr>
                <td align="right">籍贯：</td>
                <td><?php echo $pro['native']; ?>&nbsp;</td>
                <td align="right">民族：</td>
                <td><?php echo $pro['nation']; ?>&nbsp;</td>
            </tr>
            <tr>
                <td align="right">住址：</td>
                <td><?php echo $pro['local']; ?>&nbsp;</td>
                <td align="right">年级：</td>
                <td><?php echo $pro['grade']; ?>&nbsp;</td>
            </tr>
            <tr>
                <td align="right">国籍：</td>
                <td><?php echo $pro['country']; ?>&nbsp;</td>
                
                <td align="right">宿舍：</td>
                <td><?php echo $pro['dorm']; ?>&nbsp;</td>
            </tr>
            <tr>
                <td align="right">系别：</td>
                <td><?php echo $pro['part']; ?>&nbsp;</td>
                <td align="right">专业：</td>
                <td><?php echo $pro['pro']; ?>&nbsp;</td>
            </tr>
            
            <tr>
                <td colspan="4" align="left">联系方式（如联系方式有变动请及时修改，以便能及时联系到你。谢谢！）</td>
                
            </tr>
            <tr>
                <td align="right">手机号码：</td>
                <td><?php echo $pro['phone']; ?></td>
                <td align="right">第二联系号码：</td>
                <td><?php echo $pro['phone_x']; ?></td>
               
            </tr>
            <tr>
                <td align="right">QQ:</td>
                <td><?php echo $pro['QQ']; ?></td>
                <td align="right">电子邮箱：</td>
                <td><?php echo $pro['email']; ?></td>
                
            </tr>
            <tr>
                <td align="right">联系地址：</td>
                <td colspan="4"><?php echo $pro['address']; ?></td>
            </tr>
            <tr align="center">
                <td colspan="5" height="40">
                    <div align="center">
                        
                        <input type="button" id="button2" value="个人信息修改" onclick="submitMail()" class="input2" />
                    </div>
                </td>
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
