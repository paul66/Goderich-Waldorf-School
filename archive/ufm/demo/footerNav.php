<div id="footer"><?php
for($x=1; $x<6;$x++):
if($x == 1) $y = '';
else $y = $x;
echo '<a href="test'.$y.'.php">test form '.$y.'</a>';
if($x != 5) echo ' | ';
endfor;
?><br /><a href="#explanation">Info on this form</a></div>