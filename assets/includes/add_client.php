<?php 
include_once "functions.php";

if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email'])) {
	if(!add_clients($_POST['name'], $_POST['email'])) {
		$_SESSION['error'] = 'Что-то пошло не так';
	}
}

change_dir('index.php');