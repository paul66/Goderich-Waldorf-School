<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="demo/style.css" type="text/css" media="screen" />
	
</head>

<body>
<?php include 'demo/headerNav.php';?>
<form action="mailit.php" method="post" enctype="multipart/form-data" name="form1">
  <fieldset>
  <legend>Contact Us</legend>
  <p>Pick the recipient:<br />
  <select name="send_to" id="select">
        <option  selected>Pick One</option>
        <option value="0">Webmaster</option>
        <option value="1">Admin</option>
        
      </select></p>
  <p>Name:<br>
    <input name="name" type="text" id="name">
  </p>
  <p>Email:<br>
    <input name="email" type="text" id="email">
  </p>
 <fieldset class="minor"><legend>Your interests:</legend>
         <p><input name="interested_in[]" type="checkbox"  value="Business Consulting" />
        Business consulting<br />
        <input name="interested_in[]" type="checkbox"  value="Selling Business" />
        Selling your business<br />
        <input name="interested_in[]" type="checkbox"  value="Financial Planning" />
        Financial Planning
  </p>
</fieldset>
  <p> 
    <input type="submit" name="Submit" value="Send &gt;&gt;">
  </p>
  </fieldset>
</form>

<div id="explanation">
<h3>Info on this form:</h3>
  <p>This is form is used to illustrate two important concepts:</p>
  <p>(1) using fieldname[] to allow multiple values to be chosen (in this case, 
    interested_in). View source code to see the brackets.</p>
  <p>(2) using a dropdown to hide the email address of the recipient and further 
    prevent spam abuse. Note - You must change controls.php from</p>
  <code>$set['dropdown_recipient'] = '0';</code>
<p>to</p>
<code>$set['dropdown_recipient'] = '1';</code>
<p>At approximately line 23</p>  
<p>And you must put multiple recipients in controls.php</p>
<code>$set['recipient'] = array('you@youractualemailaccount.com', 'another@email.com');</code>  
</div>
<?php include 'demo/footerNav.php';?>
<p>&nbsp;</p>
</body>
</html>

