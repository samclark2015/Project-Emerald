<?PHP
//Starting up platform
function startsession(){
	session_start();
  if (!isset($_SESSION['id'])) {
header('Location: login.php');
 }
 require('config.inc');
};

//Getting user info; set as $_SESSION array
function get_currentuser_info(){
$query = mysql_query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
$_SESSION['info']['email'] = mysql_result($query, 0, "email");
$_SESSION['info']['fname'] = mysql_result($query, 0, "fname"); 
$_SESSION['info']['lname'] = mysql_result($query, 0, "lname");
global $currentuser_email, $currentuser_fname, $currentuser_lname;
};

//Include in profile.php to get info for profile page
function get_otheruser_info($id){
$query = mysql_query("SELECT * FROM users WHERE id = '" . $id . "'");
$otheruser_info['email'] = mysql_result($query, 0, "email");
$otheruser_info['fname'] = mysql_result($query, 0, "fname");
$otheruser_info['lname'] = mysql_result($query, 0, "lname");
return $otheruser_info;
};

//Get post by Profile ID; returns as array; Useful for Corkboard
function get_post_by_profile($id){
$posts = array();
$query = mysql_query("SELECT * FROM posts WHERE post_profile = '" . $id . "' ORDER BY id DESC");
$num=mysql_numrows($query);
$i=0;
while ($i < $num) {
$post['content'] = mysql_result($query,$i,"content");
$post['date'] = mysql_result($query,$i,"date");
$post['info'] = get_otheruser_info(mysql_result($query, $i, "post_profile"));
array_push($posts, $post);
$i++;
}
return $posts;
};

//Get post by Post ID; returns as array; Useful for Single Post
function get_post_by_id($id){
$query=mysql_query("SELECT * FROM posts WHERE id = " . $id . "' ORDER BY id DESC");
$post['content'] = mysql_result($query,0,"content");
$post['date'] = mysql_result($query,0,"date");
$post['time'] = mysql_result($query,0,"time");
return $post;
};

//Get post by Subscribe Status; returns as multidimensional array; Useful for Storyboard
function get_post_by_subscribe(){
$posts = array();
$subscribe = "SELECT subscribed FROM subscribe WHERE subscriber = '" . $_SESSION['id'] . "'";
$query = mysql_query("SELECT * FROM posts WHERE (post_owner IN (".$subscribe.") OR post_owner = '" . $_SESSION['id'] . "') ORDER BY id DESC");
$num=mysql_numrows($query);
$i=0;
while ($i < $num) {
$post['content'] = mysql_result($query,$i,"content");
$post['date'] = mysql_result($query,$i,"date");
$post['info'] = get_otheruser_info(mysql_result($query, $i, "post_owner"));
array_push($posts, $post);
$i++;
}
return $posts;
};

//Search Function
function search_person($query){
$results = array();
$query = mysql_query("SELECT * FROM users WHERE (fname LIKE '%".$query."%' OR lname LIKE '%".$query."%' OR concat(fname, ' ', lname) LIKE '%".$query."%')");
$num=mysql_numrows($query);
$i=0;
while ($i < $num) {
$result['fname'] = mysql_result($query,$i,"fname");
$result['lname'] = mysql_result($query,$i,"lname");
$result['email'] = mysql_result($query, $i, "email");
$result['id'] = mysql_result($query, $i, "id");
array_push($results, $result);
$i++;
}
return $results;
};


?>