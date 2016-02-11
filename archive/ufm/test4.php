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
  <fieldset class="minor"><legend>Pick the recipient:</legend>
<p>
          <input name="send_to[]" type="checkbox" id="send_to" value="0">
          admin
       <br />
          <input name="send_to[]" type="checkbox" id="send_to" value="1">
          webmaster </p></fieldset>
  <p>Name:<br>
    <input name="name" type="text" id="name">
  </p>
  <p>Email:<br>
    <input name="email" type="text" id="email">
  </p>
  
		  <p>Message:<br />
    <textarea name="message" rows="5"></textarea>
  </p>
  <p> 
    <input type="submit" name="Submit" value="Send &gt;&gt;">
  </p>
  </fieldset>
</form>

<div id="explanation">
<h3>Info on this form:</h3>
  <p>This is form is used to illustrate two important concepts:</p>
  <p>(1) using fieldname[] to allow multiple values to be chosen (in this case, 
    send_to). View source code to see the brackets.</p>
  <p>(2) using a checkboxes to hide the email address of the recipient and further 
    prevent spam abuse. And... choose <strong><em>multiple recipients</em></strong> 
    for the email. Note - You must change controls.php from</p>
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

