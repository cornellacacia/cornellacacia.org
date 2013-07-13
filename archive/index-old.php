<?php

require './header.php';
require './lib/db.php';

$db = new mysql('localhost', 'symdb', 'sympass', 'acacia');

echo "	<div class='right rtxt'>
					<img src='./images/house_img.jpg' alt='Northcote' width='250' />
					Northcote (Home to Cornell Acacia)
					<br/><br/><br/><br/>
					&quot;...To strengthen the ties of friendship, one with another; to prepare 
					ourselves as educated men to take a more active part and to have a greater 
					influence in the affairs of the community in which we may reside; and, above
					all, to seek the truth and knowing it, to give light to those with whom we 
					may be associated as we travel along life's pathway...&quot;<br/>
					-Preamble of Acacia<br/><br/>
					<br/><br/><br/>
				</div>
				<div class='txt'>

					<div class='center rtxt'><center>
					<a href='./images/map_large.gif'><img src='./images/map_small.gif' alt='click for a larger map' width='300' border='1' /></a><br/>
					click the image above for a larger map
					<br/><br/><br/>
					</center></div>

					<div class='th'><img src='./images/title_news.jpg' alt='news' /></div>";


echo "
<div class='title'><strong>Outstanding Chapter</strong> &nbsp; <span style='font-size: 9px;'>April 19, 2005</span></div>
<div class='entry'>
<div class='p'>The Cornell University Office of Fraternity and Sorority Affairs has recognized Acacia as an Outstanding Chapter.</div>
<div class='p'>This is a great addition to the chapter's list of honors. At the Acacia Fraternity's biannual Conclave in 2004, the Cornell chapter has received a number of awards. These included Outstanding Chapter, Best Dining Operations, Best Publication and the Recruitment Award.</div>
</div>

";

echo "	</div>";

$db->destroy();

require 'footer.php';

?>
