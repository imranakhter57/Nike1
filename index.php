
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nike Login</title>
	<link rel="styleSheet" href="css/style1.css">
</head>

<body>

  <div class="login">
    <h1>Login</h1>

    <form class="form" method="post" action="login.php" id="form" >

      <p class="field">
        <input type="text" name="username" placeholder="username" id="username" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="password" placeholder="password" id ="password" required/>
        <i class="fa fa-lock"></i>
      </p>
		<p class="msg" id="msg"></p>
      <p class="submit"><input type="submit" name="sent" value="Log On" id="submit"></p>
	  <p class="logout" id="logoutMsg"><?php if (isset($_GET['invalid_login'])) {
          echo "Username or password invalid. Please verify the details";
          }
          elseif(isset($_GET['msg'])){
                  echo "Logged out Successfully";
                  
              }?>
              </p>

    </form>
  </div> <!--/ Login-->
</body>
</html>