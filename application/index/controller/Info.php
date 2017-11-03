<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use app\index\model\Student;
use app\index\model\Classinfo;
use app\index\model\Honest;
use app\index\model\Special;

class Info extends Controller
{
	public function index()
	{
		return $this->fetch('index');
	}

	public function basic()
	{
		$id = 1;
		$student = Student::get($id);

		$this->assign([
			'pro' => $student
		]);

		return $this->fetch('basic');
	}

	public function class_info()
	{
		$id = 1;
		$classinfo = Classinfo::get($id);

		$this->assign([
			'pro' => $classinfo
		]);

		return $this->fetch('class_info');
	}

	public function	honest()
	{
		$id = 1;
		$honest = Honest::get($id);

		$this->assign([
			'pro' => $honest
		]);

		return $this->fetch('honest');
	}

	public function	special()
	{
		$id = 1;
		$special = Special::get($id);

		$this->assign([
			'pro' => $special
		]);

		return $this->fetch('special');
	}
}
?>