<?php
$query="SELECT * FROM posts WHERE wall_owner_id = '" . $owner_id . "' ORDER BY id DESC";
$result=mysql_query($query);


$num=mysql_numrows($result);

$i=0;
while ($i < $num) {

$post_owner_id=mysql_result($result,$i,"post_owner_id");
$content=mysql_result($result,$i,"content");
$date=mysql_result($result,$i,"date");
$time=mysql_result($result,$i,"time");
$poi_query=mysql_query("SELECT * FROM users WHERE id = '" . $post_owner_id . "'");
$post_firstname=mysql_result($poi_query, 0, "firstname");
$post_lastname=mysql_result($poi_query, 0, "lastname");
$post_profile_picture=mysql_result($poi_query, 0, "profile_picture");
?>
      <div class="post">
        <table width="auto" border="0">
        <tr>
          <td><h1 class="post-title"><a href="profile.php?user=<?php echo $post_owner_id; ?>"><?php echo $post_firstname; ?> <?php echo $post_lastname; ?></a></h1></td>
        </tr>
      </table>
        <p class="content"><?php echo $content; ?></p>
        <p class="details"><?php echo $date; ?> <?php echo $time; ?></p>
        <br />
      </div>
      
      <?php
$i++;
}
?>