<?php 
include_once "functions.php";

if (!logged_in()) change_dir();




if (isset($_POST['title']) && !empty($_POST['title']) && !empty($_POST['desc']) && !empty($_POST['link']) && !empty($_POST['video']) && !empty($_POST['cover'])) {
	$title = '';
	if ($_POST['title'] === "1") {
		$title = 'Краш-тест';
	} else if ($_POST['title'] === "2") {
		$title = 'Испытание';
	}
	$video = 'assets/video/' . $_POST['video'];
	$cover = 'assets/img/'. $_POST['cover'];

	if(!add_tests($title, $_POST['desc'], $video, $cover, $_POST['link'])) {
		$_SESSION['error'] = 'Что-то пошло не так';
		change_dir('admin.php');
	}
}

change_dir('admin.php');