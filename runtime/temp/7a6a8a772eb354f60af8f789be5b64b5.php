<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\lgyc\public/../application/index\view\index\show.html";i:1489483686;}*/ ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>个人信息展示</title>
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/show.css" />
    <script src="PUBLIC_INDEX/js/jquery.min.js"></script>
    <script src="PUBLIC_INDEX/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
textarea {
    background: transparent;
    border-style: none;
}
</style>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-education"></span><b>个人资料</b></a></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="margin:0;">
                    <li><a href="INDEX/login"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                    <li><a href="INDEX/student_edit"><span class="glyphicon glyphicon-pencil"></span>修改个人资料 </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin-top: -3%;">
        <div class="container">
            <table class="table table-bordered pc">
                <tr>
                    <td>中文姓名</td>
                    <td><?php echo $pro['chinese_name']; ?></td>
                    <td>学号</td>
                    <td colspan="2"><?php echo $pro['student_id']; ?></td>
                    <td>别名（绰号）</td>
                    <td style="min-width: 80px;"><?php echo $pro['nickname']; ?></td>
                    <td colspan="2" rowspan="5" style="text-align: center;"><img src="UPLOADS/.<?php echo $pro['photo']; ?>" onerror="this.src='PUBLIC_INDEX/images/default_head.jpg'" style="width: 130px;height:160px; vertical-align: middle;"></td>
                </tr>
                <tr>
                    <td>性别</td>
                    <td><?php echo $pro['sex']; ?></td>
                    <td>出生年月</td>
                    <td colspan="2"><?php echo $pro['birthday']; ?></td>
                    <td>国籍</td>
                    <td><?php echo $pro['country']; ?></td>
                </tr>
                <tr>
                    <td>政治面貌</td>
                    <td><?php echo $pro['political_status']; ?></td>
                    <td>籍贯</td>
                    <td colspan="2"><?php echo $pro['native_place']; ?></td>
                    <td>民族</td>
                    <td><?php echo $pro['nation']; ?></td>
                </tr>
                <tr>
                    <td>院系</td>
                    <td><?php echo $pro['faculty']; ?></td>
                    <td>宗教信仰</td>
                    <td colspan="2"><?php echo $pro['religious']; ?></td>
                    <td>婚姻状况</td>
                    <td><?php echo $pro['marital_status']; ?></td>
                </tr>
                <tr>
                    <td>专业</td>
                    <td colspan="4"><?php echo $pro['professional']; ?></td>
                    <td>特长</td>
                    <td><?php echo $pro['speciality']; ?></td>
                </tr>
                <tr>
                    <td>身份证</td>
                    <td colspan="4"><?php echo $pro['identity_card']; ?></td>
                    <td>护照</td>
                    <td colspan="2"><?php echo $pro['passport']; ?></td>
                </tr>
                <tr>
                    <td>高中入校时间</td>
                    <td><?php echo $pro['high_school_time']; ?></td>
                    <td>毕业时间</td>
                    <td colspan="2"><?php echo $pro['graduation_date']; ?></td>
                    <td>毕业中学</td>
                    <td colspan="2"><?php echo $pro['high_school']; ?></td>
                </tr>
                <tr>
                    <td rowspan="2">联系方式</td>
                    <td colspan="4" rowspan="2"><?php echo $pro['contact']; ?></td>
                    <td>qq号及昵称</td>
                    <td colspan="2"><?php echo $pro['qq']; ?></td>
                </tr>
                <tr>
                    <td>微信号及昵称</td>
                    <td colspan="2"><?php echo $pro['wechat']; ?></td>
                </tr>
                <tr>
                    <td>班级</td>
                    <td><?php echo $pro['class']; ?></td>
                    <td>宿舍</td>
                    <td colspan="2"><?php echo $pro['dorm']; ?></td>
                    <td>户籍地</td>
                    <td colspan="3"><?php echo $pro['household_register']; ?></td>
                </tr>
                <tr>
                    <td>学业水平</td>
                    <td colspan="4"><?php echo $pro['attainment_level']; ?></td>
                    <td>家庭年收入</td>
                    <td colspan="2"><?php echo $pro['annual_household_income']; ?></td>
                </tr>
                <tr style="height: 100px;">
                    <td>直系亲属</td>
                    <td colspan="7">
                        <b>姓名、关系、现住址、工作单位、联系方式</b>
                        <div class="new-comment-content" style="margin-top: 1%;">
                            <textarea name="direct_dependent" readonly="readonly" style="resize: none;height:100px;border: none;outline: none;width: 100%;"><?php echo $pro['direct_dependent']; ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr style="height: 100px;">
                    <td>获奖情况</td>
                    <td colspan="7">
                        <textarea name="award" readonly="readonly" style="resize: none;height:65px;border: none;outline: none;width: 100%;"><?php echo $pro['award']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">其他联系人
                        <br>(舍友任选其一即可)</td>
                    <td>学生干部</td>
                    <td colspan="2"><?php echo $pro['student_leader']; ?></td>
                    <td>手机</td>
                    <td colspan="3"><?php echo $pro['student_leader_phone']; ?></td>
                </tr>
                <tr>
                    <td>班主任</td>
                    <td colspan="2"><?php echo $pro['head_teacher']; ?></td>
                    <td>手机</td>
                    <td colspan="3"><?php echo $pro['head_teacher_phone']; ?></td>
                </tr>
                <tr>
                    <td>舍友</td>
                    <td colspan="2"><?php echo $pro['dorm_friend']; ?></td>
                    <td>手机</td>
                    <td colspan="3"><?php echo $pro['dorm_friend_phone']; ?></td>
                </tr>
                <tr style="height: 70px;">
                    <td>未通过科目</td>
                    <td colspan="7">
                        <textarea name="retake_exam_conditions" readonly="readonly" style="resize: none;height:52px;border: none;outline: none;width: 100%;"><?php echo $pro['retake_exam_conditions']; ?></textarea>
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td>学习性质
                        <br>(定向/非定向，预科/内高)</td>
                    <td colspan="7">
                        <textarea name="study_properties" readonly="readonly" style="resize: none;height:32px;border: none;outline: none;width: 100%;"><?php echo $pro['study_properties']; ?></textarea>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered phone">
                <tr>
                    <td colspan="1" rowspan="5" style="text-align: center;"><img src="UPLOADS/.<?php echo $pro['photo']; ?>" onerror="this.src='PUBLIC_INDEX/images/default_head.jpg'" style="width: 140px;height:170px; vertical-align: middle;" ></td>
                </tr>
                <tr>
                    <td data-label="中文姓名"></td>
                    <td colspan="3"><?php echo $pro['chinese_name']; ?></td>
                </tr>
                <tr>
                    <td data-label="别名(绰号)"></td>
                    <td><?php echo $pro['nickname']; ?></td>
                </tr>
                <tr>
                    <td data-label="性别"></td>
                    <td><?php echo $pro['sex']; ?></td>
                </tr>
                <tr>
                    <td data-label="国籍"></td>
                    <td><?php echo $pro['country']; ?></td>
                </tr>
                <tr>
                    <td data-label="出生年月"></td>
                    <td colspan="3"><?php echo $pro['birthday']; ?></td>
                </tr>
                <tr>
                    <td data-label="政治面貌"></td>
                    <td colspan="3"><?php echo $pro['political_status']; ?></td>
                </tr>
                <tr>
                    <td data-label="籍贯"></td>
                    <td colspan="3"><?php echo $pro['native_place']; ?></td>
                </tr>
                <tr>
                    <td data-label="民族"></td>
                    <td colspan="3"><?php echo $pro['nation']; ?></td>
                </tr>
                <tr>
                    <td data-label="院系"></td>
                    <td colspan="3"><?php echo $pro['faculty']; ?></td>
                </tr>
                <tr>
                    <td data-label="宗教信仰"></td>
                    <td colspan="3"><?php echo $pro['religious']; ?></td>
                </tr>
                <tr>
                    <td data-label="婚姻状况"></td>
                    <td colspan="3"><?php echo $pro['marital_status']; ?></td>
                </tr>
                <tr>
                    <td data-label="专业"></td>
                    <td colspan="3"><?php echo $pro['professional']; ?></td>
                </tr>
                <tr>
                    <td data-label="特长"></td>
                    <td colspan="3"><?php echo $pro['speciality']; ?></td>
                </tr>
                <tr>
                    <td data-label="身份证"></td>
                    <td colspan="3"><?php echo $pro['identity_card']; ?></td>
                </tr>
                <tr>
                    <td data-label="护照"></td>
                    <td colspan="3"><?php echo $pro['passport']; ?></td>
                </tr>
                <tr>
                    <td data-label="高中入校时间"></td>
                    <td colspan="3"><?php echo $pro['high_school_time']; ?></td>
                </tr>
                <tr>
                    <td data-label="毕业时间"></td>
                    <td colspan="3"><?php echo $pro['graduation_date']; ?></td>
                </tr>
                <tr>
                    <td data-label="毕业中学"></td>
                    <td colspan="3"><?php echo $pro['high_school']; ?></td>
                </tr>
                <tr>
                    <td data-label="联系方式"></td>
                    <td colspan="3"><?php echo $pro['contact']; ?></td>
                </tr>
                <tr>
                    <td data-label="qq号及昵称"></td>
                    <td colspan="3"><?php echo $pro['qq']; ?></td>
                </tr>
                <tr>
                    <td data-label="微信号及昵称"></td>
                    <td colspan="3"><?php echo $pro['wechat']; ?></td>
                </tr>
                <tr>
                    <td data-label="班级"></td>
                    <td colspan="3"><?php echo $pro['class']; ?></td>
                </tr>
                <tr>
                    <td data-label="宿舍"></td>
                    <td colspan="3"><?php echo $pro['dorm']; ?></td>
                </tr>
                <tr>
                    <td data-label="户籍地"></td>
                    <td colspan="3"><?php echo $pro['household_register']; ?></td>
                </tr>
                <tr>
                    <td data-label="家庭年收入"></td>
                    <td colspan="3"><?php echo $pro['annual_household_income']; ?></td>
                </tr>
                <tr>
                    <td data-label="学习性质(定向/非定向，预科/内高)"></td>
                    <td colspan="3"><?php echo $pro['study_properties']; ?></td>
                </tr>
                <tr>
                    <td data-label="直系亲属" colspan="3">(姓名、关系、现住址、工作单位、联系方式)</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea style="resize: none;height:65px;">
                            <?php echo $pro['direct_dependent']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td data-label="获奖情况" colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea style="resize: none;height:65px;">
                            <?php echo $pro['award']; ?>
                        </textarea>
                    </td>
                </tr>

                <tr>
                    <td data-label="未通过科目" colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <textarea style="resize: none;height:65px;">
                            <?php echo $pro['retake_exam_conditions']; ?>
                        </textarea>
                    </td>
                </tr>

                <tr>
                    <td data-label="其他联系人(舍友任选其一即可)" colspan="3"></td>
                </tr>
                <tr>
                    <td data-label="学生干部(姓名)"></td>
                    <td colspan="3"><?php echo $pro['student_leader']; ?></td>
                </tr>
                <tr>
                    <td data-label="学生干部(手机)"></td>
                    <td colspan="3"><?php echo $pro['student_leader_phone']; ?></td>
                </tr>
                <tr>
                    <td data-label="班主任(姓名)"></td>
                    <td colspan="3"><?php echo $pro['head_teacher']; ?></td>
                </tr>
                <tr>
                    <td data-label="班主任(手机)"></td>
                    <td colspan="3"><?php echo $pro['head_teacher_phone']; ?></td>
                </tr>
                <tr>
                    <td data-label="舍友(姓名)"></td>
                    <td colspan="3"><?php echo $pro['dorm_friend']; ?></td>
                </tr>
                <tr>
                    <td data-label="舍友(手机)"></td>
                    <td colspan="3"><?php echo $pro['dorm_friend_phone']; ?></td>
                </tr>

            </table>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <p>Copyright ©2017 <a href="#">少数民族学生信息系统</a> All rights reserved.</p>
            </div>
        </footer>
</body>

</html>
