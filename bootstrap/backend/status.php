<?PHP
require('functions.php');
startsession();
$status = $_POST['status'];
$date = date(mdY);
mysql_query("INSERT INTO posts (content, post_owner, post_profile) VALUES ('". $status . "', '" . $_SESSION['id'] . "', '" . $_SESSION['id'] . "')") or die(mysql_error());
?>