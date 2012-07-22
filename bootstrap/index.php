<?php include('header.php');
$posts = get_post_by_subscribe();
$postslength = count($posts);
for ($e = 0; $e < $postslength; $e++) {
	?>
        <div class="post">
        <h2><?=$posts[$e]['info']['fname']." ".$posts[$e]['info']['lname']?></h2>
           <p><?=$posts[$e]['content']?></p>
          <p><a class="btn pull-right" href="#">Repost</a></p>
        </div>
<?PHP } ?>
<?PHP include('footer.php'); ?>