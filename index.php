<?php
require_once('functions.php');
require_once('data.php');

$project = null;
$arr = [];

if(isset($_GET['project_id'])) {
	$project_id = $_GET['project_id'];
	foreach ($arr_projects as $key => $item) {
		if($item == $project_id) {
			$project = $item;
			// $arr[] = $item;
		break;
		}
	}
}

if(!$project) {
	http_response_code(404);
}

$page_content = include_template('templates/index.php', ['show_complete_tasks' => $show_complete_tasks, 'arr_tasks' => $arr_tasks]);
$layout_content = include_template('templates/layout.php', [
	'title' => $title,
	'arr_projects' => $arr_projects,
	'arr_tasks' => $arr_tasks,
	'main' => $page_content,
	'project' =>  $item,


	]);
print($layout_content);