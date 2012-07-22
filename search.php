<?php require_once('header.php'); ?>
    <div class="post-section">
    <table width="362" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="auto"><font face="museo">Name</font></td>
<td width="auto"><font face="museo">Email</font></td>
</tr>
      <?PHP
$results = search_person($_GET['query']);
$resultslength = count($results);
for ($e = 0; $e < $resultslength; $e++) {
	?>
<tr>
<td><font face="museo"><a href="profile.php?uid=<?=$results[$e]['id']?>"><?=$results[$e]['fname']." ".$results[$e]['lname'] ?></a></font></td>
<td><font face="museo"><?=$results[$e]['email']?></font></td>
</tr>
<?PHP } ?>
</table>
    </div>
    <div id="sidebar">
      <div id="options" class="admin">
       <table width="100%" border="0">
          <tr>
            <td width="80%"><h1 align="left" class="title" valign="center"> <a href="profile.php?user=<?php echo "null"; ?>"><?php echo "null"; ?> 
              <?="null"?>
            </a></h1></td>
          </tr>
        </table>
        
      <a href="logout.php">Logout </a></div>
      
    </div>
</div>
</body>
</html>