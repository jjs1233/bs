<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"F:\HTML\mzwz\public/../application/index\view\index\edit_form.html";i:1486280794;}*/ ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>信息修改</title>

<link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="PUBLIC_INDEX/css/style.css" />

<script src="PUBLIC_INDEX/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<style>
	label{
		font-weight:bold;
		font-size: 16px;
	}

</style>


</head>

<body>
<div style="background: #ccc;height:50px;">
<p style="font-size: 20px;padding: 10px;">学生信息档案修改</p>
<a href="home.html" style="float: right;margin: -3.4% 2%;font-size: 1.3em;">返回首页</a>
</div>
<form name="reg_testdate" style="width: 30%;margin:20px 430px;">
<div class="form-group">
<label>姓名</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>别名（绰号）</label>
<input type="text" class="form-control" placeholder="">
</div>	

<label>性别：</label>
<label class="checkbox-inline">
    <input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked>男
  </label>
  <label class="checkbox-inline">
    <input type="radio" name="optionsRadiosinline" id="optionsRadios4" value="option2">女
  </label>
</div>

<div class="form-group" style="margin-top:10px">
<label>出生日期：</label>
  <select name="YYYY" onchange="YYYYDD(this.value)">
    <option value="">请选择 年</option>
  </select>
  <select name="MM" onchange="MMDD(this.value)">
    <option value="">选择 月</option>
  </select>
  <select name="DD" id="DD">
    <option value="">选择 日</option>
  </select>
</div>

<div class="form-group">
<label>上传照片</label>
	<input type="file" id="inputfile">
</div>

<div class="form-group">
<label>国籍</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>政治面貌</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>籍贯</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>民族</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>院系</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>宗教信仰</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>婚姻状况</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>专业</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>特长</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>身份证</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>护照</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>高中入校时间</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>毕业时间</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>毕业中学</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>联系方式</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>qq号及昵称</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>微信号及昵称</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>户籍地</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>班级+宿舍</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>获得各类证书情况</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>家庭年收入</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>学生干部姓名</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>学生干部联系方式</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>班主任姓名</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>班主任联系方式</label>
<input type="text" class="form-control" placeholder="">
</div>	

<div class="form-group">
<label>补考重修情况</label>
<input type="text" class="form-control" placeholder="">
</div>

<div class="form-group">
   <label for="name">直系亲属（姓名、关系、住址、工作单位、联系方式）</label>
   <textarea class="form-control" rows="3"></textarea>
</div>

<div class="form-group">
   <label for="name">简历</label>
   <textarea class="form-control" rows="3"></textarea>
</div>

<div class="form-group">
   <label for="name">就业意向</label>
   <textarea class="form-control" rows="3"></textarea>
</div>

<button type="button" class="btn btn-primary btn-lg " style="margin:20px 150px;">更新</button>

</form>









<script>
   function YYYYMMDDstart()   
   {   
           MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];   
    
           //先给年下拉框赋内容   
           var y  = new Date().getFullYear();   
           for (var i = (y-30); i < (y+30); i++) //以今年为准，前30年，后30年   
                   document.reg_testdate.YYYY.options.add(new Option(" "+ i +" 年", i));   
    
           //赋月份的下拉框   
           for (var i = 1; i < 13; i++)   
                   document.reg_testdate.MM.options.add(new Option(" " + i + " 月", i));   
    
           document.reg_testdate.YYYY.value = y;   
           document.reg_testdate.MM.value = new Date().getMonth() + 1;   
           var n = MonHead[new Date().getMonth()];   
           if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;   
                writeDay(n); //赋日期下拉框Author:meizz   
           document.reg_testdate.DD.value = new Date().getDate();   
   }   
   if(document.attachEvent)   
       window.attachEvent("onload", YYYYMMDDstart);   
   else   
       window.addEventListener('load', YYYYMMDDstart, false);   
   function YYYYDD(str) //年发生变化时日期发生变化(主要是判断闰平年)   
   {   
           var MMvalue = document.reg_testdate.MM.options[document.reg_testdate.MM.selectedIndex].value;   
           if (MMvalue == ""){ var e = document.reg_testdate.DD; optionsClear(e); return;}   
           var n = MonHead[MMvalue - 1];   
           if (MMvalue ==2 && IsPinYear(str)) n++;   
                writeDay(n)   
   }   
   function MMDD(str)   //月发生变化时日期联动   
   {   
        var YYYYvalue = document.reg_testdate.YYYY.options[document.reg_testdate.YYYY.selectedIndex].value;   
        if (YYYYvalue == ""){ var e = document.reg_testdate.DD; optionsClear(e); return;}   
        var n = MonHead[str - 1];   
        if (str ==2 && IsPinYear(YYYYvalue)) n++;   
       writeDay(n)   
   }   
   function writeDay(n)   //据条件写日期的下拉框   
   {   
           var e = document.reg_testdate.DD; optionsClear(e);   
           for (var i=1; i<(n+1); i++)   
                e.options.add(new Option(" "+ i + " 日", i));   
   }   
   function IsPinYear(year)//判断是否闰平年   
   {     return(0 == year%4 && (year%100 !=0 || year%400 == 0));}   
   function optionsClear(e)   
   {   
        e.options.length = 1;   
   }   
   </script>
</body>
</html>