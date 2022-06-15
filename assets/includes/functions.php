<?php
include_once "config.php";

function debug($var, $stop = false) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
	if ($stop) die();
}

function get_url($page ='') {
	return HOST . "/$page";
}

function get_page_title($title = "") {
	if (!empty($title)) {
		return SITE_NAME . " - $title";
	} else {
		return SITE_NAME;
	}
}

function change_dir($str) {
	header("Location: " . get_url($str)); 
		die;
}

function db() {
	try {
		return new PDO("mysql:host=". DB_HOST. ";dbname=". DB_NAME . ";charset=utf8", DB_USER, DB_PASS,
			[
				PDO::ATTR_EMULATE_PREPARES => false,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]
		);
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

function db_query($sql, $exec = false) {
	if (empty($sql)) return false;

	if ($exec) return db()->exec($sql);

	return db()->query($sql);
}

function get_tests($sort = false) {
	$sorting = 'DESC';
	if ($sort) $sorting = 'ASC';
	return db_query("SELECT * FROM `tests` ORDER BY tests.`id` $sorting;")->fetchAll();
}

function get_error_message()
{
	$error = '';
	if (!empty($_SESSION['error']) && isset($_SESSION['error'])) {
		$error = $_SESSION['error'];
		$_SESSION['error'] = '';
	}

	return $error;
}

function add_clients($name, $email) {
	$name = trim($name);
	return db_query("INSERT INTO `clients`(`name`, `email`) VALUES ('$name','$email');");
}

function get_user_info($login){
	return db_query("SELECT * FROM `users` WHERE login = '$login';")->fetch();
}

function logged_in() {
	return isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id']);
}

function login($auth_data) {
	if (empty($auth_data) || !isset($auth_data['login']) || empty($auth_data['login'])) return false;
	if (empty($auth_data) || !isset($auth_data['pass']) || empty($auth_data['pass'])) return false; 
	$user = get_user_info($auth_data['login']);
	
	if(empty($user)) {
		$_SESSION['error'] = 'Пользователь с такими логином и паролем не найден '; 
		change_dir('login.php');
	}



	if (password_verify($auth_data['pass'], $user['password'])) {
		$_SESSION['user'] = $user; 
		$_SESSION['error'] = '';
		
		change_dir('admin.php');
	} else {
		$_SESSION['error'] = "Пароль неверный";
		change_dir('login.php');
	}
	
}


function add_tests($title, $desc, $video, $cover, $link) {

	return db_query("INSERT INTO `tests`(`title`, `description`, `video`, `cover`, `link`) VALUES ('$title','$desc','$video','$cover','$link');");
}
