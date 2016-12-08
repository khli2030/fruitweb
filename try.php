<?php

$email = $_POST['email'];
$file = "form_file.php";
file_put_contents($file,$email . PHP_EOL, FILE_APPEND);
print("THANK FOR SUBMITING");
?>