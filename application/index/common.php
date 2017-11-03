<?php 
	/*导出至excel*/
	use think\Session;
	use app\index\model\Excel;

	function excel_out($pro,$uuid){
		copy('excel/model.xls','excel/cache/'.$uuid.'.xls');
		$PHPExcel = new PHPExcel();
        $PHPExcel->removeSheetByIndex();
        $PHPExcel->createSheet();
        $PHPExcel->setActiveSheetIndex()->setTitle('test');
        $PHPExcel->getActiveSheet()->fromArray($pro, null, 'A1', true);
        $PHPExcelWriter = PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel5');
        $PHPExcelWriter->save('excel/cache/'.$uuid.'.xls');
	}

	/*返回excel数据*/
	function excel_in($info){
		if($info->getExtension() == 'xlsx'){
            $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        }else{
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
        }

        $objReader->setReadDataOnly(true);
        $excel = $objReader->load($info->getPathname());

        return $excel->getActiveSheet()->toArray();
	}

	function excel_array_change($pro){
		$foo = Excel::in_EN();

		try{
			foreach (array_slice($pro,1) as $key => $value) {
				$li[$key] = array_combine($foo, $value);
			}
		}catch(Exception $e){
			return 0;
		}

		return $li;
	}

	function create_uuid($prefix = ""){    //可以指定前缀
	    $str = md5(uniqid(mt_rand(), true));   
	    $uuid  = substr($str,0,8) . '-';   
	    $uuid .= substr($str,8,4) . '-';   
	    $uuid .= substr($str,12,4) . '-';   
	    $uuid .= substr($str,16,4) . '-';   
	    $uuid .= substr($str,20,12);   
	    return $prefix . $uuid;
	}
 ?>