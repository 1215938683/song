<?php 

function Culltion($a,$b){
	return intval($a.''.$b) > intval($b.''.$a);
}

function PrintMinNumber($number){
	usort($number, 'Culltion');
	return intval(implode('',$number));
}
$arr=[3,32,321];
var_dump(PrintMinNumber($arr));






 ?>