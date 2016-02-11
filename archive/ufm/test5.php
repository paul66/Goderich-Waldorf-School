<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Test Form 5</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="demo/style.css" type="text/css" media="screen" />
	
<script src="createToken.js.php"></script>
</head>

<body>
<?php include 'demo/headerNav.php';?>
<!-- To use the extra security that prevents spam attacks before they begin
you have to follow these steps
(1) turn ON the setting for extra security in the controls file
(2) include the file, as shown above (if you're viewing the PHP source code of this page)
(3) print out the javascript somewhere appropriate in the html structure of your page.

In this example I'm printing out the javascript before the </head> tag, which is where most
js gurus advise you to do it... but I've found that this isn't necessary.

You should have additional documentation for more options and advice on this feature.

If not, or if you can't find it, then log into your account online at 
www.UltimateFormMail.com

-->
<form action="mailit.php" method="post" enctype="multipart/form-data" name="form1">
  <fieldset>
  <legend>Contact Us</legend>
  <p>Name:<br>
    <input name="name" type="text" id="name">
  </p>

  <p>Message:<br>
    <textarea name="message" rows="8"></textarea>
  </p>
  <p> 
    <input type="submit" name="Submit" value="Send &gt;&gt;">
  </p>
  </fieldset>
</form>
<div id="explanation">
<h3>Info on this form:</h3>
  <p>This form demonstrates that you do not need to require or use an email address 
    in your form IF you go into controls.php and change</p>
  <code>$set['autoresponder'] = '1';</code>
<p>to</p>
<code>$set['autoresponder'] = '0';</code>
<p>At approximately line 37</p>
</div>
<?php include 'demo/footerNav.php';?>
</body>
</html>