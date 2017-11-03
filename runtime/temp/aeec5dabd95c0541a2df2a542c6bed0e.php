<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"F:\HTML\lgyc\public/../application/index\view\index\excel.html";i:1488369830;}*/ ?>
<html>

<head>
    <meta charset="utf-8">
    <title>导入excel</title>
    <link rel="stylesheet"  href="PUBLIC_INDEX/css/bootstrap.min.css" />
    <link rel="stylesheet"  href="PUBLIC_INDEX/css/excel.css">
    <script src="PUBLIC_INDEX/js/jquery.min.js" type="text/javascript"></script>
    <script src="PUBLIC_INDEX/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="PUBLIC_INDEX/js/scripts.js"></script>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-cloud-upload"></span> <b>导入excel</b></a>
                <a class="navbar-nav" style="margin-top: 21px;" href="EXCEL/model.xls"><span class="glyphicon glyphicon-save"></span> <b>下载模板</b></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="margin:0">
                    <li>
                        <a href="#"> <span class="glyphicon glyphicon-list-alt"></span> 导出excel</a>
                    </li>
                    <li><a href="PUBLIC/home"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="file-box">
            <form action="INDEX/excel_upload" method="post" enctype="multipart/form-data" style="margin-top: 20%;text-align: center;">
                <a href="javascript:;" class="a-upload">
                <input type="file" name="excel" id="excel" class="showFileName"><span>点击这里上传文件</span>
                </a>
                <input type="submit" name="submit" class="btn" value="提交">
            </form>
        </div>
        <img src="PUBLIC_INDEX/./images/excel.jpg">
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <p>Copyright ©2017 <a href="PUBLIC_INDEX//">少数民族学生信息系统</a> All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
