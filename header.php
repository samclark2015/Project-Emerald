<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
	require("backend/functions.php");
	startsession();
	get_currentuser_info();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Friendify</title>
 <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="banner">
    <table width="80%" border="0" align="center">
      <tr>
        <td width="69%"><a href="index.php">Project Emerald</a></td>
        <td width="30%"><div id="search"><form name="form1" method="get" action="search.php">
          <label for="search-query"></label>
          <input type="text" name="query" id="query">
          <input type="submit" name="search-button" id="search-button" value="Search">
        </form></div></td>
      </tr>
    </table>
</div>
<div class="main-container">