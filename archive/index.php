<?php

require './header.php';
require './lib/db.php';

$db = new mysql('localhost', 'musicald_acacia', 'BlAcK&GoLd', 'musicald_acacia');

echo "  <div class='right rtxt'>
                    <img src='./images/house_img.jpg' alt='Northcote' width='250' />
                    Northcote (Home to Cornell Acacia)
                    <br/><br/><br/><br/>
                    &quot;...To strengthen the ties of friendship, one with another; to prepare 
                    ourselves as educated men to take a more active part and to have a greater 
                    influence in the affairs of the community in which we may reside; and, above
                    all, to seek the truth and knowing it, to give light to those with whom we 
                    may be associated as we travel along life's pathway...&quot;<br/>
                    -Preamble of Acacia<br/><br/>
                    <br/>

<OBJECT classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0'
WIDTH='250' HEIGHT='282' id='BeABro'>
<PARAM NAME=movie VALUE='http://www.rso.cornell.edu/acacia/BeABro.swf'>
<PARAM NAME=quality VALUE=high>
<EMBED src='http://www.rso.cornell.edu/acacia/BeABro.swf' quality=high WIDTH='250' HEIGHT='282'
NAME='BeABro' ALIGN='' TYPE='application/x-shockwave-flash'
PLUGINSPAGE='http://www.macromedia.com/go/getflashplayer'>
</EMBED>
</OBJECT>
                </div>
                <div class='txt'>

                 <div class='th'><img src='./images/title_news.jpg' alt='news' /></div>";


$q = $db->q("SELECT * FROM news WHERE visible=1 ORDER BY nid ASC");
        while($f = $db->nqf($q)){
        	$f['post_date'] = date('m/d/Y', strtotime($f['post_date']));
            if($f['visible'] != 0)
                echo "
                    <div class='title'><strong>{$f['subject']}</strong> &nbsp; <span style='font-size: 9px;'>{$f['post_date']}</span></div>
                    <div class='entry'>
                        {$f['content']}
                    </div>";
        }



echo "<br/><br/>
					<div class='center rtxt'>
                    <a href='./images/map_large.gif'><img src='./images/map_small.gif' alt='click for a larger map' width='300' border='1' /></a><br/>
                    click the image above for a larger map
                    <br/><br/><br/>
                    </div>

			<br/><br/>
          </div>";

$db->destroy();

require 'footer.php';

?>