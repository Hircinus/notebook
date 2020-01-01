<?php
$file = 'notes.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "<div class='note'><h3>" . $_GET["title"] . "</h3>" . "<p>" . $_GET["body"] . "</p></div>\n";
// Write the contents back to the file
file_put_contents($file, $current);
header('Location: http://localhost:8888/notebook/notebook.php');
?>
