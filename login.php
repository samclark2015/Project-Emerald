<!DOCTYPE html>
<html>
<head>
 <title>Socially</title>
 <link href="CSS/style.css" rel="stylesheet" type="text/css">
 
 <?php
 session_start();
  if (isset($_SESSION['id'])) {
header('Location: index.php');
 }
 require('backend/config.inc');
?>
  <style>
 .post-section{
	 width:100%;
	 height:auto;
 }
 
  </style>


<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
		function submitform(){
			  document.login.submit();
			}
        </script>
        
</head>
<body>
<div id="banner">
  <table width="80%" border="0" align="center">
      <tr>
        <td width="50%"><a href="index.php">Project Emerald</a></td>
        <td width="50%">
 <form action="backend/login-proc.php" method="POST" class="login" name="login">
 <table width="91%" border="0">
   <tr>
     <td width="31%" height="25"><p>Email</p></td>
     <td width="32%"><p>Password</p></td>
     </tr>
     <tr>
     <td><input type="text" name="email" size="20"></td>
     <td><input type="password" name="password" size="20"></td>
     <td width="37%"><input type="submit" name="button" id="button" value="Login"></td>
   </tr>
 </table>
 </form>
 </td>
    </tr>
  </table>
</div>
<div class="main-container">
  
  <div class="post-section">
  <div id="signup">
    <div id="signup-title"><h1 class="title" align="left">Sign Up
    </h1></div>
    <form action="backend/signup-proc.php" method="post" enctype="multipart/form-data" name="form2">
    <table width="100%" border="0">
      <tr>
        <td width="28%"><div align="right">First Name:</div></td>
        <td width="72%">
          <span id="sprytextfield1">
            <label for="firstname"></label>
            <span id="sprytextfield2">
            <label for="firstname2"></label>
            <input type="text" name="firstname" id="firstname2">
            <span class="textfieldRequiredMsg">A value is required.</span></span>            <span class="textfieldRequiredMsg">A value is required.</span></span>
        </td>
      </tr>
      <tr>
        <td><div align="right">Last Name:</div></td>
        <td><span id="sprytextfield3">
          <label for="lastname"></label>
          <input type="text" name="lastname" id="lastname">
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><div align="right">Email:</div></td>
        <td><span id="sprytextfield4">
          <label for="email"></label>
          <input type="text" name="email" id="email">
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div></td>
        <td><span id="sprypassword1">
          <label for="password"></label>
          <input type="password" name="password2" id="password">
          <span class="passwordRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><div align="right">And Again:</div></td>
        <td><span id="sprypassword2">
          <label for="passwordconfirm"></label>
          <input type="password" name="passwordconfirm" id="passwordconfirm">
          <span class="passwordRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><div align="right">Birthday:</div></td>
        <td><span id="spryselect1">
          <label for="month"></label>
          <select name="month" id="month">
            <option value="January" selected>January</option>
            <option value="Febuary">Febuary</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
          <span class="selectRequiredMsg">Please select an item.</span></span><span id="spryselect2">
          <label for="day"></label>
          <select name="day" id="day">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <span class="selectRequiredMsg">Please select an item.</span></span><span id="spryselect3">
          <label for="year"></label>
          <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
          </select>
          <span class="selectRequiredMsg">Please select an item.</span></span></td>
      </tr>
      <tr>
        <td><div align="right">Gender:</div></td>
        <td><span id="spryselect4">
          <label for="gender"></label>
          <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <span class="selectRequiredMsg">Please select an item.</span></span></td>
      </tr>
      <tr>
        <td>Profile Picture:</td>
        <td><label for="files"></label>
          <input type="file" name="files" id="files"></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Sign Up!"></td>
      </tr>
    </table>
    </form>
</div>
  <div id="motto"></div>
  </div>
</div>
    </div>
</div>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
</script>
</body>
</html>