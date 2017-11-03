<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use app\index\model\Award;
use app\index\model\Punish;


class Honor extends Controller
{
	public function index()
	{
		$this->redirect('award');
	}
	
	public function award()
	{
		$student_id = 1;
		$award = Award::all(['student_id' => $student_id]);

		$this->assign([
			'pro' => $award
		]);

		return $this->fetch('award');
	}

	public function punish()
	{
		$student_id = 1;
		$punish = Punish::all(['student_id' => $student_id]);

		$this->assign([
			'pro' => $punish
		]);

		return $this->fetch('punish');
	}
}
?>