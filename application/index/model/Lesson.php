<?php 	
	namespace app\index\model;
	use think\Model;

	class Lesson extends Model{
		protected $table = 'Lesson';
		protected $pk = 'id';

		public function getAm_1Attr($value){
			return explode(';', $value);
		}

		public function getAm_2Attr($value){
			return explode(';', $value);
		}

		public function getAm_3Attr($value){
			return explode(';', $value);
		}

		public function getPm_1Attr($value){
			return explode(';', $value);
		}

		public function getPm_2Attr($value){
			return explode(';', $value);
		}

		public function getEve_1Attr($value){
			return explode(';', $value);
		}

		public function getEve_2Attr($value){
			return explode(';', $value);
		}
	}
 ?>