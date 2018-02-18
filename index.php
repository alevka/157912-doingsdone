<?php
require_once('functions.php');
require_once('data.php');

$page_content = include_template('templates/index.php', ['show_complete_tasks' => $show_complete_tasks, 'arr_tasks' => $arr_tasks]);
$layout_content = include_template('templates/layout.php', [
	'title' => $title,
	'arr_projects' => $arr_projects,
	'arr_tasks' => $arr_tasks,
	'main' => $page_content,


	]);
print($layout_content);