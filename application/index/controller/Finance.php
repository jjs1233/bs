<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use app\index\model\Work;
use app\index\model\Subsidy;

class Finance extends Controller
{
	public function index()
	{
		$this->redirect('subsidy');
	}
	
	public function work()
	{
		$student_id = 1;
		$work = Work::all(['student_id' => $student_id]);

		$this->assign([
			'pro' => $work
		]);

		return $this->fetch('work');
	}

	public function subsidy()
	{
		$student_id = 1;
		$subsidy = Subsidy::all(['student_id' => $student_id]);

		$this->assign([
			'pro' => $subsidy
		]);

		return $this->fetch('subsidy');
	}
}
?>