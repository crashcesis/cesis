<?php
include_once "functions.php";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?=get_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?=get_url('assets/css/index.css') ?>">
	<link rel="icon" href="<?=get_url('assets/logo/logo.jpg') ?>" type="image/x-icon">
	<title><?=get_page_title($title); ?></title>
</head>
<body>	
	<div class="container">

		<header>
			<nav> <!-- Шапка сайта -->
				<a href="<?=get_url('') ?>">
					<div class="logo"><img src="<?=get_url('assets/logo/logo.gif') ?>"></div>
				</a>
				<ul>
					<li><a href="https://www.youtube.com/channel/UCJlmWp_1azNhMaKvI7tFylA"><img src="<?=get_url('assets/img/yt.png') ?>"></a></li>
					<li><a href="https://vk.com/cesis_official"><img src="<?=get_url('assets/img/vk.png') ?>"></a></li>
				</ul>
			</nav>
		</header>