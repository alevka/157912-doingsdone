<?php
function count_tasks($arr_tasks, $category) {
			$count_tasks = 0;
	foreach ($arr_tasks as $key => $value) {
		if ($category == "Все") {
			$count_tasks++;
		}
		else if ($value['category'] == $category) {
			$count_tasks++;
		}
	}
	return $count_tasks;
}

function include_template($name_template, $parameters){
	$result = '';
	if (!is_file($name_template)){ $result=''; }
	else {
		extract($parameters);
		ob_start();  //Включение буферизации вывода
    	require_once($name_template); //переменные из extract будут видны внутри подключаемого файла
    	$result = ob_get_clean();  //возвращаем буфер и очищаем
    }
    return $result;

}

function date_calculation($date) {
	$result = false;
	$curday = time();
	$date = strtotime($date);
	$days_remaining = ($date - $curday)/86400;
	if ($days_remaining <= 1) {
		$result = true;
	}
	return $result;
}