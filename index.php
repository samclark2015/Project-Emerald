<?php include('header.php'); ?>
    <div class="post-section">
    <?PHP
$posts = get_post_by_subscribe();
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
<?PHP include('footer.php'); ?>