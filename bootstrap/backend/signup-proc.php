<?Php
$email = $_POST['email'];
$pass1 = $_POST['password2'];
$pass2 = $_POST['passwordconfirm'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$first = $_POST['firstname'];
$last = $_POST['lastname'];

include('../config.inc');

$checkavail = mysql_query("SELECT * FROM users WHERE email = '" . $_POST['email'] . "'");

//if(mysql_num_rows($checkavail) != 0){
mysql_query("INSERT INTO users (username, email, password, firstname, lastname, month, day, year, gender, profile_picture)
 VALUES ('flan', '" . $email . "', md5('" . $pass1 . "'), '" . $first . "', '" . $last . "', '" . $month . "','" . $day . "','" . $year . "','" . $gender . "', 'flan')") or die(mysql_error());
echo "done.";
session_start();
 $_SESSION['email'] = $email;
setcookie("first-time", "yes", 3600*24*365*20);
header('Location: ../index.php');
?>