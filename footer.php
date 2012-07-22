<div id="sidebar">
      <div id="options">
        <table width="100%" border="0">
          <tr>
            <td width="214"><h1 align="left" class="title" valign="center"> <a href="profile.php?user=<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION['info']['fname']." ".$_SESSION['info']['lname']; ?> 
            </a></h1></td>
          </tr>
        </table>
        
        <form name="form2" method="post" action="backend/status.php">
          <label for="status"></label>
          <input name="status" type="text" id="status" value="Status Update">
          <input type="submit" name="button" id="button" value="Update">
        </form>
        <p><a href="logout.php">Logout </a>      </p>
      </div>
      
    </div>
</div>
<!--<script type="text/javascript">
$('#posts').load('backend/news-feed.php?uid=<?=$current_user_id?>');

var n = 0;

document.getElementById("date").innerHTML = n;


$('#notifications').click(function() {
	$('#posts').load('backend/news-feed.php?uid=<?=$current_user_id?>');
    $('#notifications').slideUp();
	n=0;
});

$.ajax({
  url: 'Push/notifications.php?uid=<?=$current_user_id?>',
  success: function(data) {
	  if(data == "new-notification"){
		  $('#notifications').slideDown();
		  n++;
		  document.getElementById("date").innerHTML = n;
	  }
	  else{s
	  }
  }
});		
</script> -->
</body>
</html>