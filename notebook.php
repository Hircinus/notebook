<?php
if($_COOKIE["access"] != true) {
  header('Location: http://localhost:8888/notebook/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Notebook</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <form action="savenote.php">
    <input name="title" placeholder="Note title">
    <textarea name="body" placeholder="Take a note..."></textarea>
    <input type="submit" value="Save">
  </form>
  <?php require 'notes.txt'; ?>
  <script src="script.js"></script>
</body>
</html>
