<?php

require './header.php';
require './lib/db.php';

$db = new mysql('localhost', 'symdb', 'sympass', 'acacia');

echo "<br><br><br>
<center>
<OBJECT classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0'
WIDTH='432' HEIGHT='486' id='BeABro'>
<PARAM NAME=movie VALUE='http://www.rso.cornell.edu/acacia/BeABro.swf'>
<PARAM NAME=quality VALUE=high>
<EMBED src='http://www.rso.cornell.edu/acacia/BeABro.swf' quality=high WIDTH='432' HEIGHT='486'
NAME='BeABro' ALIGN='' TYPE='application/x-shockwave-flash'
PLUGINSPAGE='http://www.macromedia.com/go/getflashplayer'>
</EMBED>
</OBJECT>
<br><br><br><br>
<a href='index.php'>Enter</a>
</center>
   ";


require 'footer.php';

?>