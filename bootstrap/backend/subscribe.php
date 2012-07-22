<?php

 session_start();
  if (!isset($_SESSION['email'])) {
header('Location: login.php');
 }
 require('../config.inc');
 
  $current_user_id = mysql_result(mysql_query("SELECT id FROM users WHERE email = '" . $_SESSION['email'] . "'"), 0);

 mysql_query("INSERT INTO subscribe (subscriber_id, subscribee_id) VALUES ('" . $_POST['subscriber'] . "', '" . $_POST['subscribee'] . "')") or die(mysql_error());
 echo $_POST['subscriber'] . "</br>";
 echo $_POST['subscribee'];
header('Location: '.$_SERVER['HTTP_REFERER'].'');
echo $_SERVER['HTTP_REFERER'];
?>