<?php 

include_once "assets/includes/functions.php";
if (!logged_in()) change_dir('');
$tests = get_tests();
$title = 'Панель администратора';
$error = get_error_message();

include_once "assets/includes/header.php";



?>

<main>
	<div class="element mb-5">
		<form class="m-5"  action="<?php echo get_url("assets/includes/add_tests.php"); ?>" method="post">
			<h2>Добавить тест</h2>
			 <div class="danger"><?php echo $error; ?></div>
		<div class="mb-3">
	    <select class="form-select" name="title" required aria-label="select">
	      <option value="">Откройте это меню выбора</option>
	      <option value="1">Краш-тест</option>
	      <option value="2">Испытание</option>
	    </select>
	  </div>

	  <div class="mb-3">
	    <label for="validationTextarea" class="form-label">Описание</label>
	    <textarea class="form-control" name="desc" id="validationTextarea" placeholder="Описание" required></textarea>
	  </div>

	  	<div class="mb-3">
		    <label for="validationDefault01" class="form-label">Ссылка на продукцию</label>
		    <input type="text" name="link" class="form-control" id="validationDefault01" required>
		  </div>

	  <div class="mb-3">
	  	<label for="formFile" class="form-label">Видеоролик</label>
		<input class="form-control" name="video" type="file" id="formFile" required>
	  </div>
	  <div class="mb-3">
	  	<label for="formFile2" class="form-label">Обложка видео</label>
		<input class="form-control" name="cover" type="file" id="formFile2" required>
	  </div>

	    <button class="btn btn-primary mb-3" type="submit">Добавить</button>
	  
	</form>
	<a href="<?php echo get_url('assets/includes/logout.php'); ?>" class="link_exit" title="Выйти">выйти</a>
	</div>
</main>

		<footer> <!-- Подвал сайта -->
			<div>2022©ЦеСИС</div> 
				<div> 
  				<span>Краш-тесты и испытания</span>
			</div>
			
		</footer>
	</div>
		
	<a class="login-link" href="<?php echo get_url('login.php'); ?>"></a>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>