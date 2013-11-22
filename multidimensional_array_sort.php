<?php

/**
* 二维数组排序
*
* @return array
*/
function array_sort($arr,$keys,$type='asc'){
	$keysvalue = $new_array = array();
	foreach ($arr as $k=>$v){
		$keysvalue[$k] = $v[$keys];
	}
	if($type == 'asc'){
		asort($keysvalue);
	}else{
		arsort($keysvalue);
	}
	reset($keysvalue);
	foreach ($keysvalue as $k=>$v){
		$new_array[$k] = $arr[$k];
	}
	return $new_array;
}

$array = array(
	array('name'=>'手机','brand'=>'诺基亚','price'=>1050),
	array('name'=>'笔记本电脑','brand'=>'lenovo','price'=>4300),
	array('name'=>'剃须刀','brand'=>'飞利浦','price'=>3100),
	array('name'=>'跑步机','brand'=>'三和松石','price'=>4900),
	array('name'=>'手表','brand'=>'卡西欧','price'=>960),
	array('name'=>'液晶电视','brand'=>'索尼','price'=>6299),
	array('name'=>'激光打印机','brand'=>'惠普','price'=>1200)
);

$ShoppingList = array_sort($array,'price');
print_r($ShoppingList);

?>