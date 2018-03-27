<?php
	session_start();
?>

<!DOCTYPE html>

<html>

<head>
  <title>The Mall Catalog</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form class="register-form" action="php/register.php" method="post">
		  <input class="name" type="text" name="name" placeholder="name" />
        <input class="username" type="text" name="username" placeholder="username" />
        <input class="password" type="password" name="password" placeholder="password" />
        <input class="email" type="text" name="email" placeholder="email address" />
        <input class="create-btn" type="submit" value="Create" onclick="return validate_register();" />
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>

      <form class="login-form" action="php/login.php" method="post">
        <input class="username" type="text" name="username" placeholder="username" />
        <input class="password" type="password" name="password" placeholder="password" />
        <input class="login-btn" type="submit" value="Login" onclick="return validate_login();" />
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>

    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/index.js"></script>

</body>

</html>