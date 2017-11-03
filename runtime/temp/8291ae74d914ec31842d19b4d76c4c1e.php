<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\xampp\htdocs\lgyc\public/../application/index\view\index\student_list.html";i:1490936479;}*/ ?>
<html>
<head>
  <meta charset="utf-8">
  <title>学生信息概览</title>
<link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/student_list.css">
<script src="PUBLIC_INDEX/js/jquery.min.js" type="text/javascript"></script>
<script src="PUBLIC_INDEX/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
function change(pro){
    var a = confirm("确认删除？");
    if(a){
        window.location.href=pro;
    }else{
        return false;
    }
}
</script>


</head>
<body>



    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-folder-open"></span><b> 少数名族学生信息系统</b></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="margin:0">
                    <li><a href="INDEX/home.html"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                    <li class="active">
                        <a href="INDEX/student_list.html"> <span class="glyphicon glyphicon-list-alt"></span> 学生信息</a>
                    </li>
                    <li>
                        <a href="INDEX/new_student.html"> <span class="glyphicon glyphicon-user"></span> 新建学生档案</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<div class="table-responsive" style="margin:5% 5%;">
  <table class="table">
    <thead>
      <tr>
       <th>中文姓名</th>
        <th>性别</th>
        <!-- <th>籍贯</th> -->
        <th>民族</th>
         <th>院系</th>
        <!-- <th>专业</th> -->
        <!-- <th>班级</th> -->
        <th>联系方式</th>
      </tr>
    </thead>
    <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
        <tr>
            <td><a href="INDEX/show?id=<?php echo $v['user_id']; ?>"><?php echo $v['chinese_name']; ?></a></td>
                    <td><?php echo $v['sex']; ?></td>
                    <!-- <td><?php echo $v['country']; ?></td> -->
                    <td><?php echo $v['nation']; ?></td>
                    <td><?php echo $v['faculty']; ?></td>
                    <!-- <td><?php echo $v['professional']; ?></td> -->
                    <!-- <td><?php echo $v['class']; ?></td> -->
                    <td><?php echo $v['contact']; ?></td>
            <td><button onclick="change('INDEX/delete_user?id=<?php echo $v['user_id']; ?>')">删除</button></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
</div>
    <footer class="footer">
        <div class="container-fluid">
            <p>Copyright ©2017 <a href="#">少数民族学生信息系统</a> All rights reserved.</p>
        </div>
    </footer>

</body>
</html>