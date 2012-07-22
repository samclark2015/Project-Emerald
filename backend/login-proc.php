<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
require("config.inc");
$query = mysql_query("SELECT * FROM users WHERE (email = '" . $_POST['email'] . "') and (pwd = '" . md5($_POST['password']) . "')");
if (mysql_num_rows($query) == 1) {
$_SESSION['id']=mysql_result($query, 0, "id");
header("Location: ../index.php");
}
else {
header("Location: ../login.php");
}
?>
