<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$title = 'content';

$arr_projects = ["Все", "Входящие", "Учеба", "Работа", "Домашниe дела", "Авто"];

$arr_tasks = array(
	array(
		"task" => "Собеседование в IT компании",
		"date" => "01.06.2018",
		"category" => "Работа",
		"done" => "Нет",
	),
	array(
		"task" => "Выполнить тестовое задание",
		"date" => "25.05.2018",
		"category" => "Работа",
		"done" => "Нет",
	),
	array(
		"task" => "Сделать задание первого раздела",
		"date" => "21.04.2018",
		"category" => "Учеба",
		"done" => "Да",
	),
	array(
		"task" => "Встреча с другом",
		"date" => "22.04.2018",
		"category" => "Входящие",
		"done" => "Нет",
	),
	array(
		"task" => "Купить корм для кота",
		"date" => "Нет",
		"category" => "Домашниe дела",
		"done" => "Нет",
	),
	array(
		"task" => "Заказать пиццу",
		"date" => "Нет",
		"category" => "Домашниe дела",
		"done" => "Нет",
	)
);
