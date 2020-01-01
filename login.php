<?php
if($_COOKIE["access"] == true) {
  header('Location: http://localhost:8888/notebook/notebook.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Notebook - Log in</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <h1>Log in</h1>
  <p>Thank you for visiting. Currently, the notebook web app is still currently in Beta, so you can use the
    password that the webmaster gave you.</p>
  <form method="post">
    <input name="pass" placeholder="Enter the password here...">
    <br>
    <label for="remember">Remember me</label>
    <input type="checkbox" name="remember">
    <br>
    <input type="submit" value="Log in">
  </form>
  <?php
  $pass = $_POST["pass"];
  $remember = $_POST["remember"];
  if($pass === "pass1") {
    if(!empty($remember)) {
      setcookie("access", "true", time() + 1*24*60*60);
    }
    else {
      setcookie("access", "true", time() + 5);
    }
    header('Location: http://localhost:8888/notebook/notebook.php');
  }
  elseif ($pass === "" || $pass === null) {
    echo 'Please enter the password.';
  }
  else {
    echo 'Sorry, that password is incorrect.';
  }
  ?>
  <script src="script.js"></script>
</body>
</html>
