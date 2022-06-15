<?php
include_once "assets/includes/functions.php";
$title = 'Авторизация';
$error = get_error_message();

if (logged_in()) change_dir('admin.php');
include_once "assets/includes/header.php";
?>


    <main>
      <div class="element mb-5">
    <form class="p-5" action="<?php echo get_url("assets/includes/sign_in.php"); ?>" method="post">
      <h2>Вход</h2>
      <div class="form__error"><?php echo $error; ?></div>
      <div class="mb-3">
        <label for="exampleInputlogin" class="form-label">Логин</label>
        <input type="text" name="login" class="form-control" id="exampleInputlogin" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
      </div>
    
      <button type="submit" class="btn btn-primary">Войти</button>
    </form>
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



