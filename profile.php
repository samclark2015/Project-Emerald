<?php require_once('header.php');
$info = get_otheruser_info($_GET['uid']);
?>
    <div class="post-section">
      <?PHP
$posts = get_post_by_profile($_GET['uid']);
$postslength = count($posts);
for ($e = 0; $e < $postslength; $e++) {
	?>
     <div class="post">
        <h1 class="post-title"><a href="profile.php?user=<?php echo "null"; ?>"><?php echo $posts[$e]['info']['fname']; ?> <?php echo $posts[$e]['info']['lname']; ?></a></h1>
        <p class="content"><?php echo $posts[$e]['content']; ?></p>
        <p class="details"><?php echo $posts[$e]['date']; ?></p>
      </div>
<?PHP } ?>
    </div>
    <div id="sidebar">
      <div id="options" class="admin">
        <table width="100%" border="0">
          <tr>
            <td width="94"><h1 align="left" class="title" valign="center"><?php echo $info['fname']." ".$info['lname']; ?></h1></td>
          </tr>
        </table>
        <form action="PHP/subscribe.php" method="post" name="subscribe">
        <input type="hidden" name="subscriber" value="<?=$current_user_id?>">
 		<input type="hidden" name="subscribee" value="<?=$id?>">
        <input type="hidden" name="return" value="<?=$_SERVER['PATH-INFO']?>">
        <?PHP if (mysql_num_rows($subscribed) == 0) { ?>
        <a href="javascript: submitform()">Subscribe</a>
		<?PHP } else{ ?>
        <a href="javascript: alert('Not supported as of now.')">Subscribed</a>
        <?PHP }?>
        </form>
		<script type="text/javascript">
		function submitform(){
			  document.subscribe.submit();
			}
        </script>
        
</div>
      
    </div>
<?PHP require('footer.php');