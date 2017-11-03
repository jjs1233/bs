<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use app\index\model\Student;
use app\index\model\User;
use app\index\model\Excel;
use think\Db;
use PHPExcel_IOFactory;
use PHPExcel;

class Index extends Controller
{
 //    public function login()
 //    {   
 //        return $this->fetch('login');
 //    }

 //    /**
 //    * @todo 
 //    登录界面
 //    普通用户登录跳转至show
 //    管理员登录跳转至home
 //    **/
 //    public function judge_identity()
 //    {
 //        if($user = User::get($_POST)){
 //            /*写入session*/
 //            session::set('user_id',$user->id);
 //            /*判断power值 0为学生跳转至show 1为老师跳转至home*/
 //            if($user->power == 0){
 //                $this->redirect('show');
 //            }else if($user->power == 1){
 //                /*管理员token*/
 //                session::set('token','jjsshishen');
 //                $this->redirect('home');
 //            }
 //        }else{
 //            $this->error('用户名或者密码错误');
 //        }
 //    }

 //    /** 
 //    * @todo
 //    学生密码修改页面
 //    **/
 //    public function change_passwd()
 //    {
 //        return $this->fetch('change_passwd');
 //    }

 //    /** 
 //    * @todo
 //    学生密码修改接口
 //    **/
 //    public function change_passwd_action()
 //    {
 //        if($user = User::get(['username' => $_POST['username'],'password' => $_POST['old_passwd']])){
 //            $user->save(['password' => $_POST['password']]);
 //            $this->success('密码修改成功！','login');
 //        }else{
 //            $this->error('您输入的用户名与原密码不对应！');
 //        }
 //    }

 //    /**
 //    * @todo
 //    学生信息展示页面
 //    注意事项
 //    如果学生信息为空处理方式(讨论后决定)
 //    session事件！！！
 //    **/
 //    public function show()
 //    {
 //        $this->check_user();

 //        if($_GET){
 //            session::set('user_id',$_GET['id']);
 //        }
 //        /*获取session中的值*/
 //        $user_id = session::get('user_id');
 //        $student = Student::get(['user_id' => $user_id]);

 //        if(empty($student)){
 //            $this->error('你的学号未被登记！');
 //        }

 //        $this->assign([
 //            'pro' => $student->toArray()
 //        ]);
        
 //    	return $this->fetch('show');
 //    }


 //    /**
 //    * @todo
 //    学生信息修改页面
 //    注意事项
 //    照片上传
 //    **/
 //    public function student_edit()
 //    {
 //        $this->check_user();

 //        $user_id = session::get('user_id');
 //        $student = Student::get(['user_id' => $user_id]);
        
 //        $this->assign([
 //            'pro' => $student->toArray()
 //        ]);
        
 //    	return $this->fetch('student_edit');
 //    }

 //    /**
 //    * @todo
 //    学生信息修改操作
 //    注意事项
 //    照片上传
 //    **/
 //    public function student_edit_action()
 //    {   
 //        $user_id = session::get('user_id');
 //        $student = Student::get(['user_id' => $user_id]);
 //        /*图片路径修改*/
 //        if(!empty(request()->file())){
 //            $info = request()->file('photo')->move(ROOT_PATH . 'public'. DS . 'uploads');
 //            $_POST['photo'] = explode('\uploads',$info->getPathname())[1];
 //        }

 //        if($student->save($_POST)){
 //            $this->redirect('show');
 //        }else{
 //            $this->error('修改失败');
 //        }
 //    }

 //    /**
 //    * @todo
 //    学生信息添加页面
 //    注意事项
 //    照片上传
 //    **/
 //    public function new_student()
 //    {
 //        $this->check_token();

 //    	return $this->fetch('new_student');
 //    }

 //    /**
 //    * @todo
 //    学生信息添加功能
 //    注意事项
 //    照片上传
 //    **/
 //    public function new_student_action()
 //    {
 //        if(!empty(request()->file())){
 //            $info = request()->file('photo')->move(ROOT_PATH . 'public'. DS . 'uploads');
 //            $_POST['photo'] = explode('\uploads',$info->getPathname())[1];
 //        }

 //        /*插入新学生记录 如果学号未存在 则生成账号 账号密码皆为学号*/
 //        if(!empty($_POST['student_id'])){
 //            if(User::get(['username' => $_POST['student_id']])){
 //                $this->error('抱歉，该学号学生已经存在！');
 //            }else{
 //                $user = User::create([
 //                    'username' => $_POST['student_id'],
 //                    'password' => $_POST['student_id'],
 //                    'power' => 0
 //                    ]); 
 //                $_POST['user_id'] = $user->id;
 //                Student::create($_POST);
 //            }
 //        }else{
 //            $this->error('抱歉,学号不能为空!');
 //        }
        
 //        $this->redirect('show',['id' => $user->id]);
 //    }


 //    /**这部分是小t负责的**/

 //    /**
 //    * @todo
 //    管理员登录后页面
 //    session事件！！！
 //    **/
 //    public function home()
 //    {
 //        $this->check_token();

 //        return $this->fetch('home');
 //    }


 //    /**
 //    * @todo 查询结果页面
 //    * @param 查询条目classid 已经查询数据keyboard
 //    * @return like查询结果
 //    **/
 //    public function search_results()
 //    {   
 //        $this->check_token();

 //        $foo[$_POST['classid']] = ['like','%'.$_POST['keyboard'].'%'];

 //        if(empty($foo)){
 //        }else{
 //            $list =Student::scope('Simple_search',$foo)->select();
 //        }

 //        /*生成excel文件*/
 //        $excel[0] = Excel::in_CN();

 //        foreach ($list as $key => $value) {
 //            $excel[$key+1] = array_slice($value->toArray(),1,-2);
 //          }

 //        /*生成uuid*/
 //        $uuid = create_uuid();
 //        excel_out($excel,$uuid);

 //        $this->assign([
 //            'list' => $list,
 //            'count' => count($list),
 //            'uuid'  => $uuid
 //        ]);


 //        return $this->fetch('search_results');
 //    }


 //    /**
 //    * @todo 全部学生信息展示
 //    * 注意事项 后期可能要加分页效果
 //    **/
 //    public function student_list()
 //    {
 //        $this->check_token();

 //        $list = Student::all();

 //        $this->assign([
 //            'list' => $list
 //        ]);

 //        return $this->fetch('student_list');
 //    }


 //    /**
 //    * @todo 学生数据转换为生成excel表格
 //    * 注意事项 模板文件和生成文件不能在一个地址下
 //    **/
 //    public function excel()
 //    {
 //        $this->check_token();

 //        return $this->fetch('excel');
 //    }

 //    public function excel_upload()
 //    {   
 //        if(strstr($_FILES['excel']['name'],'xls') or strstr($_FILES['excel']['name'],'xlsx')){
 //            $info = request()->file('excel')->move(ROOT_PATH . 'public'. DS . 'excel');
 //        }else{
 //            $this->error('您上传的文件有误或者您未上传文件！');
 //        }

 //        /*处理excel数据*/
 //        $pro = excel_array_change(excel_in($info));
 //        if($pro == 0){
 //            $this->error('您上传的文件内容格式有问题！');
 //        }

 //        /*导入excel数据*/
 //        foreach ($pro as $k => $v) {
 //            if($user = User::get(['username' => $v['student_id']])){

 //            }else{
 //                $user = User::create([
 //                    'username' => $v['student_id'],
 //                    'password' => $v['student_id'],
 //                    'power' => 0
 //                    ]);
 //            }

 //            if($student = Student::get(['student_id' => $v['student_id']])){
 //                $student->save(array_merge($v,['user_id' => $user['id']]));
 //            }else{
 //                Student::create(array_merge($v,['user_id' => $user['id']]));
 //            }
 //        }

 //        $this->success('数据导入成功','student_list');

 //    }

 //    public function delete_user(){
 //        $this->check_token();

 //        Student::destroy(['user_id' => $_GET['id']]);

 //        $this->redirect('student_list');
 //    }

 //    /*检测session状态*/
 //    private function check_token(){
 //        if(session::get('token') != 'jjsshishen'){
 //            $this->error('异常！','/lgyc/public');
 //        }
 //    }

 //    private function check_user(){
 //        if(empty(session::get('user_id'))){
 //            $this->error('异常！','/lgyc/public');
 //        }
 //    }
}
