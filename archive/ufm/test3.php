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

  <p>Name:<br>
    <input name="name" type="text" id="name">
  </p>
  <p>Email:<br>
    <input name="email" type="text" id="email">
  </p>
  <fieldset class="minor"><legend>File upload</legend>
  <p>File #1<br />
  <input type="file" name="file1" />
  </p>
    
  <p>File #2<br />
  <input type="file" name="file2" />
  </p>
  </fieldset>

  <p> 
    <input type="submit" name="Submit" value="Send &gt;&gt;">
  </p>
  </fieldset>
</form>

<div id="explanation">
<h3>Info on this form:</h3>
  <p>This form shows how easy it is to use Ultimate Form Mail to upload and attach 
    files.</p>
  <p>One of the great things about Ultimate Form Mail is that you can allow visitors 
    to upload files, ban certain file types, and attach the files <strong>without 
    changing your server permissions to 777 or world writable</strong>. In fact, 
    you don't have to change your permission settings at all. <em>This keeps your 
    server super secure if you just want the attachments.</em></p>
  <p>You can also limit the size of each file, as well as the aggregate upload 
    size.</p>
  <p>And if you want to save the files to your server, then Ultimate Form Mail 
    can do this too. You will likely need to change your folder permissions, but 
    you can put the directory outside of the public directory. The file save directory 
    can be anywhere on your server.</p>

  <code>/*********************************<br />
Upload attachments<br />
**********************************/<br />
//$set['required_filefields'] = array('file1','file2');<br />
$set['file_max_size'] = '500';<br />
$set['file_max_size_total'] = '500';<br />
$set['banned_ext'] = array('php', 'phtml', 'cgi', 'pl', 'asp', 'jsp', 'c', 'cfm', 'shtml', 'exe', 'bat', 'com');
<br />
$set['send_attachment'] = '1';</code>
  <p>and </p>
<code>/*********************************<br />
File Save<br />
*********************************/<br />
$set['file_upload'] = '1';<br />
$set['file_max_size_total'] = '500';<br />
//$set['file_save_dir'] = '/home/sitename/public_html/upload';<br />
$set['prevent_overwrite'] = '1';</code>
  <p>At approximately line 104 of controls.php</p>  
  <p>&nbsp;</p>
</div>
<?php include 'demo/footerNav.php';?>
<p>&nbsp;</p>
</body>
</html>

