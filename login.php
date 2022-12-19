<?php
include('config.php');
// include('index.php');
if (isset($_POST['Signin'])) {
	// session_start();
	// if (!isset($_SESSION['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = mysqli_query($con, "SELECT * FROM admin WHERE email='$username' && password='$password'");
		$rowcount = mysqli_num_rows($query);
		if ($rowcount == true) {
			// $_SESSION["username"] = $username;
			header('location:index.php');
		// } else {
?>
			<script type="text/javascript">
				alert('Sorry Wrong user id or password');
				window.location.href ='login.p';
			</script>
<?php
		// }
	} else {
		header('location:dashboard');
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./login.css">
  </head>
  <body>
  <div class="top"><a href="index"><h2>HOME</h2></a></div>
<div class="login-box">
  <h1>Login</h1>
  <form method='POST' action=''>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password">
  </div>

  <input type="submit" class="btn" name='Signin'>
  </form>
</div>
  </body>
</html>
