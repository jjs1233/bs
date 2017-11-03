<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use app\index\model\Lesson;
use app\index\model\Grade;

class Edu extends Controller
{
	public function index()
	{
		$this->redirect('grade');
	}

	public function lesson()
	{
		$id = 1;
		$lesson = Lesson::get($id);

		$this->assign([
			'pro' => $lesson
		]);

		return $this->fetch('lesson');
	}

	public function grade()
	{
		$student_id = 1;
		$grade = Grade::all(['student_id' => $student_id]);
		$count = Grade::where('student_id',1);
		$count_CRS = $count->sum('CRS');
		$count_not_pass = $count->where('CRS',null)->count('*');
		
		$this->assign([
			'pro' => $grade,
			'count_CRS' => $count_CRS,
			'count_not_pass' => $count_not_pass
		]);

		return $this->fetch('grade');
	}
}
?>