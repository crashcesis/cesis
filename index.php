<?php 
include_once "assets/includes/functions.php";
$tests = get_tests();
$title = '';
$error = get_error_message();
include_once "assets/includes/header.php";
?>


		<main>
			<div class="form">
				<img class="peole" src="assets/img/people.png">
				<div>
					<p>Узнавайте о новых видеороликах первые!</p>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Подписаться</button>
				</div>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel"><img src="assets/logo/logo.jpg"></h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      	</div>
				      	<div class="modal-body">
					        <form action="<?php echo get_url('assets/includes/add_client.php'); ?>" method="post">
					        	<div class="mb-3">
								    <label for="exampleInputText" class="form-label">Ваше имя:</label>
								    <input type="text"  class="form-control" name="name" id="exampleInputText" required>
								 </div>
							  	<div class="mb-3">
								    <label for="exampleInputEmail1" class="form-label">Ваш E-mail:</label>
								    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
								</div>
								 <div class="mb-3 form-check">
								    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
								    <label class="form-check-label" for="exampleCheck1">Я согласен с политикой конфиденциальности</label>
								</div>
								<button type="submit" class="btn btn-primary">Отправить</button>
							</form>
				     	</div>
				      </div>
				   	</div>
				</div>
			</div>
			<div class="element">
				<?php foreach ($tests as $test) { ?>
				<div class="grid1">
					<div class="desc">
						<h1><?php echo $test['title']; ?></h1>
						<p><?php echo $test['description']; ?></p>
						<button class="btn btn-primary"><a href="<?php echo $test['link']; ?>">Перейти на сайт</a></button>
					</div>
					<div class="video">
						<video poster="<?php echo get_url($test['cover']); ?>" controls>
							<source src="<?php echo get_url($test['video']); ?>" type="video/mp4">
						</video>
					</div>	
				</div>
				<?php } ?>
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