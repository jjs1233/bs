<?php 	
	namespace app\index\model;
	use think\Model;

	class Grade extends Model{
		protected $table = 'Grade';
		protected $pk = 'id';

		public function getMakeUpAttr($value){
			if($value == null){
				return "无";
			}else{
				return $value;
			}
		}

		public function getCRSAttr($value){
			if($value == null){
				return 0;
			}else{
				return $value;
			}
		}
	}
 ?>