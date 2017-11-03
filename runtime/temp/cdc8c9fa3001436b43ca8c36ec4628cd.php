<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\xampp\htdocs\lgyc\public/../application/index\view\index\search_results.html";i:1490936490;}*/ ?>
<html>

<head>
    <meta charset="utf-8">
    <title>搜索结果显示</title>
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/search_results.css">
    <script src="PUBLIC_INDEX/js/jquery.min.js" type="text/javascript"></script>
    <script src="PUBLIC_INDEX/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" ><span class="glyphicon glyphicon-search"></span> <b> 搜索到 <?php echo $count; ?> 个符合要求的学生</b></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="margin:0">
                <li class="active"><a href="INDEX/home.html"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                 <li><a href="INDEX/excel" target="_blank"><span class="glyphicon glyphicon-list-alt"></span> 导入excel</a></li>
                    <li>
                        <a href="EXCEL/cache/<?php echo $uuid; ?>.xls"> <span class="glyphicon glyphicon-list-alt"></span> 导出excel</a>
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
                    <th>专业</th>
                    <th>班级</th>
                    <th>联系方式</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
                <tr>
                    <td><a href="INDEX/show?id=<?php echo $v['user_id']; ?>" target="_blank"><?php echo $v['chinese_name']; ?></a></td>
                    <td><?php echo $v['sex']; ?></td>
                    <!-- <td><?php echo $v['country']; ?></td> -->
                    <td><?php echo $v['nation']; ?></td>
                    <td><?php echo $v['faculty']; ?></td>
                    <td><?php echo $v['professional']; ?></td>
                    <td><?php echo $v['class']; ?></td>
                    <td><?php echo $v['contact']; ?></td>
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
