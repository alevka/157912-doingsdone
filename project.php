<?php
require_once('functions.php');
require_once('data.php');

$project = null;
$arr = [];

if(isset($_GET['project_id'])) {
	$project_id = $_GET['project_id'];
	foreach ($arr_tasks as $item) {
		if($item['category'] == $project_id) {
			$arr[] = $item;
		break;
		}
	}
}

if(!$project) {
	http_response_code(404);
}

$page_content = include_template('templates/project.php', ['show_complete_tasks' => $show_complete_tasks, 'arr_tasks' => $arr_tasks]);
$layout_content = include_template('templates/layout.php', [
	'title' => 'project',
	'arr_projects' => $arr_projects,
	'arr_tasks' => $arr_tasks,
	'main' => $page_content,


	]);
print($layout_content);