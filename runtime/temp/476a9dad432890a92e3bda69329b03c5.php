<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"F:\HTML\lgyc\public/../application/index\view\index\home.html";i:1489152049;}*/ ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/home.css">
    <script src="PUBLIC_INDEX/js/jquery.min.js" type="text/javascript"></script>
    <script src="PUBLIC_INDEX/js/bootstrap.min.js" type="text/javascript"></script>


    <style>
    .search .select_showbox {
        height: 45px;
        background: url(PUBLIC_INDEX/images/search_ico.png) no-repeat 60px center;
        text-indent: 1.5em;
    }

    .search .select_showbox.active {
        background: url(PUBLIC_INDEX/images/search_ico_hover.png) no-repeat 60px center;
    }
    .search {
        vertical-align:middle;
    }
    img{vertical-align:middle;}  /* 关键代码 */
    .test{height:100%;display:inline-block;vertical-align:middle;position:absolute;} 
    </style>


</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="INDEX/login"><span class="glyphicon glyphicon-folder-open"></span><b> 少数名族学生信息系统</b></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="margin:0">
                    <li class="active"><a href="INDEX/home"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                    <li>
                        <a href="INDEX/student_list"> <span class="glyphicon glyphicon-list-alt"></span> 学生信息</a>
                    </li>
                    <li>
                        <a href="INDEX/new_student"> <span class="glyphicon glyphicon-user"></span> 新建学生档案</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contaniner">

    <div class="bg">
        <img src="PUBLIC_INDEX/images/bg7.jpg"> 
    </div>

        <div class="search radius6 smalt_search">
            <form name="searchform" method="post" action="INDEX/search_results" target="_blank">
                <input type="hidden">
                <select name="classid" id="choose">
                    <!-- <option value="0">搜索选项</option> -->
                    <option value="chinese_name">姓名</option>
                    <option value="sex">性别</option>
                    <option value="country">国家</option>
                    <option value="nation">民族</option>
                    <option value="faculty">院系</option>
                    <option value="professional">专业</option>
                    <option value="class_dorm">班级</option>
                    <!-- <option value="religious">宗教信仰</option> -->
                </select>
                <input class="inp_srh smalt_input" name="keyboard" placeholder="请输入搜索内容">
                <button class='smalt_button'>搜索</button>
            </form>
        </div>
        <script type="text/javascript" src="PUBLIC_INDEX/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="PUBLIC_INDEX/js/jquery.select.js"></script>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <p>Copyright ©2017 <a href="#">少数民族学生信息系统</a> All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
