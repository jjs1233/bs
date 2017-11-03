<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\xampp\htdocs\lgyc\public/../application/index\view\index\student_edit.html";i:1489553408;}*/ ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>信息修改界面</title>
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/student_edit.css">
    <script src="PUBLIC_INDEX/js/jquery.min.js" type="text/javascript"></script>
    <script src="PUBLIC_INDEX/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="PUBLIC_INDEX/js/jquery-ui.min.js" type="text/javascript"></script>
    <script>
    $(function(){
        $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'yy-mm-dd',
        });  
    });
  </script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-pencil"></span><b> 修改个人信息</b></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="margin:0">
                    <li><a href="INDEX/login"><span class="glyphicon glyphicon-home"></span> 返回登录</a></li>
                    <li>
                        <a href="INDEX/show"> <span class="glyphicon glyphicon-list-alt"></span> 查看个人信息</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin-top: -3%"> 
      <div class="container">
      <form method="post" enctype="multipart/form-data" action="INDEX/student_edit_action">
       <table class="table table-bordered" style="margin-top: 5%;margin-bottom: 1%">  
    <tr>
        <td>中文姓名</td>
        <td><input type="text" name="chinese_name" value="<?php echo $pro['chinese_name']; ?>"></td>
        <td>学号</td>
        <td colspan="2"><input type="text" name="student_id" value="<?php echo $pro['student_id']; ?>"></td>
        <td>别名（绰号）</td>
        <td><input type="text" name="nickname" value="<?php echo $pro['nickname']; ?>"></td>
        <td colspan="2" rowspan="5"><div style="margin:35% 20%;"><input type="file" class="photo" name="photo"></div></td>
    </tr>
    <tr>
        <td>性别</td>
        <td><input type="text" name="sex" value="<?php echo $pro['sex']; ?>"></td>
        <td>出生年月</td>
        <td colspan="2"><input type="text" id="datepicker" name="birthday" value="<?php echo $pro['birthday']; ?>"></td>
        <td>国籍</td>
        <td><input type="text" name="country" value="<?php echo $pro['country']; ?>"></td>
    </tr>
    <tr>
        <td>政治面貌</td>
        <td><input type="text" name="political_status" value="<?php echo $pro['political_status']; ?>"></td>
        <td>籍贯</td>
        <td colspan="2"><input type="text" name="native_place" value="<?php echo $pro['native_place']; ?>"></td>
        <td>民族</td>
        <td><input type="text" name="nation" value="<?php echo $pro['nation']; ?>"></td>
    </tr>
    <tr>
        <td>院系</td>
        <td><input type="text" name="faculty" value="<?php echo $pro['faculty']; ?>"></td>
        <td>宗教信仰</td>
        <td colspan="2"><input type="text" name="religious" value="<?php echo $pro['religious']; ?>"></td>
        <td>婚姻状况</td>
        <td><input type="text" name="marital_status" value="<?php echo $pro['marital_status']; ?>"></td>
    </tr>
    <tr>
        <td>专业</td>
        <td colspan="4"><input type="text" name="professional" value="<?php echo $pro['professional']; ?>"></td>
        <td>特长</td>
        <td><input type="text" name="speciality" value="<?php echo $pro['speciality']; ?>"></td>

    </tr>

    <tr>
        <td>身份证</td>
        <td colspan="4"><input type="text" name="identity_card" value="<?php echo $pro['identity_card']; ?>"></td>
        <td>护照</td>
        <td colspan="2"><input type="text" name="passport" value="<?php echo $pro['passport']; ?>"></td>
    </tr>

    <tr>
        <td >高中入校时间</td>
        <td ><input type="text" name="high_school_time" value="<?php echo $pro['high_school_time']; ?>"></td>
        <td >毕业时间</td>
        <td colspan="2"><input type="text" name="graduation_date" value="<?php echo $pro['graduation_date']; ?>"></td>
        <td >毕业中学</td>
        <td colspan="2" ><input type="text" name="high_school" value="<?php echo $pro['high_school']; ?>"></td>
    </tr>

    <tr>
        <td rowspan="2">联系方式</td>
        <td colspan="4" rowspan="2"><input type="text" name="contact" value="<?php echo $pro['contact']; ?>"></td>
        <td>qq号及昵称</td>
        <td colspan="2"><input type="text" name="qq" value="<?php echo $pro['qq']; ?>"></td>
       
    </tr>

    <tr>
     <td>微信号及昵称</td>
        <td colspan="2"><input type="text" name="wechat" value="<?php echo $pro['wechat']; ?>"></td>
    </tr>
    <tr>
        <td>班级</td>
        <td ><input type="text" name="class" value="<?php echo $pro['class']; ?>"></td>
        <td>宿舍</td>
        <td colspan="2"><input type="text" name="dorm" value="<?php echo $pro['dorm']; ?>"></td>
        <td>户籍地</td>
        <td colspan="3"><input type="text" name="household_register" value="<?php echo $pro['household_register']; ?>"></td>
    </tr>
    <tr>
        <td>学业水平</td>
        <td colspan="4"><input type="text" name="attainment_level" value="<?php echo $pro['attainment_level']; ?>"></td>
        <td>家庭年收入</td>
        <td colspan="2"><input type="text" name="annual_household_income" value="<?php echo $pro['annual_household_income']; ?>"></td>
    </tr>
        <tr style="height: 100px;">
            <td >直系亲属</td>
            <td colspan="7">
            <b>姓名、关系、现住址、工作单位、联系方式</b>  
            <textarea name="direct_dependent" style="resize: none;height:65px;"><?php echo $pro['direct_dependent']; ?></textarea>
            </td>
        </tr>
        <tr style="height: 100px;">
            <td>获奖情况</td>
            <td colspan="7">
            <textarea name="award" style="resize: none;height:100px;"><?php echo $pro['award']; ?></textarea>
            </td>
        </tr>
    <tr>
        <td rowspan="3">其他联系人<br>(舍友任选其一即可)</td>
        <td>学生干部</td>
        <td colspan="2"><input type="text" name="student_leader" value="<?php echo $pro['student_leader']; ?>"></td>
        <td>手机</td>
        <td colspan="3"><input type="text" name="student_leader_phone" value="<?php echo $pro['student_leader_phone']; ?>"></td>
    </tr>
    <tr>
        <td>班主任</td>
        <td colspan="2"><input type="text" name="head_teacher" value="<?php echo $pro['head_teacher']; ?>"></td>
        <td>手机</td>
        <td colspan="3"><input type="text" name="head_teacher_phone" value="<?php echo $pro['head_teacher_phone']; ?>"></td>
    </tr>
    <tr>
        <td>舍友</td>
        <td colspan="2"><input type="text" name="dorm_friend" value="<?php echo $pro['dorm_friend']; ?>"></td>
        <td>手机</td>
        <td colspan="3"><input type="text" name="dorm_friend_phone" value="<?php echo $pro['dorm_friend_phone']; ?>"></td>
    </tr>
    <tr style="height: 70px;">
        <td>未通过科目</td>
        <td colspan="7">

        <textarea name="retake_exam_conditions" style="resize: none;height:52px;"><?php echo $pro['retake_exam_conditions']; ?></textarea>

        </td>
    </tr>
    <tr style="height: 50px;">
        <td>学习性质<br>(定向/非定向，预科/内高)</td>
        <td colspan="7">
        <textarea name="study_properties" style="resize: none;height:32px;"><?php echo $pro['study_properties']; ?></textarea>
        </td>
    </tr>
      </table>
      <button>修改</button>
    </form>
    </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <p>Copyright ©2017 <a href="#">少数民族学生信息系统</a> All rights reserved.</p>
        </div>
    </footer>
</body>
<script type="text/javascript">               
        function handleEnter (field, event) {
        var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
        if (keyCode == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
        } 
        else
        return true;
    }      

</SCRIPT>

</script>
</html>
