<?php

require './header.php';

echo "	
	
		<center>
		<div class='ntxt'>
			<a href='./index2.php'><img src='./images/nav_home.jpg' alt='home' border='0'/></a>
			<a href='./info.php'><img src='./images/nav_information.jpg' alt='information' border='0'/></a>
			<a href='./publications.php'><img src='./images/nav_publications.jpg' alt='publications' border='0'/></a>
			<a href='./actives.php'><img src='./images/nav_actives.jpg' alt='actives' border='0'/></a>
			<a href='./alumni.php'><img src='./images/nav_alumni.jpg' alt='alumni' border='0'/></a>
			<a href='./rush.php'><img src='./images/nav_rush.jpg' alt='rush' border='0'/></a>
			<a href='./contact.php'><img src='./images/nav_contact.jpg' alt='contact' border='0'/></a>
		<div>
		</center>
	


	<div class='th'><img src='./images/title_alumni.jpg' alt='alumni' /></div>
	<div class='title'>PayPal Donations</div>
	<form action='https://www.paypal.com/cgi-bin/webscr' method='post' style='display:inline; margin:0px; padding:0px'>
		<input type='hidden' name='cmd' value='_xclick'/>
		<input type='hidden' name='business' value='AcaciaCorpBoard@cornell.edu'/>
		<input type='hidden' name='item_name' value='Dues'/>
		<input type='hidden' name='no_shipping' value='1'/>
		<input type='hidden' name='no_note' value='1'/>
		<input type='hidden' name='currency_code' value='USD'/>
		<input type='hidden' name='tax' value='0'/>
		<input type='hidden' name='lc' value='US'/>
		<input type='image' src='https://www.paypal.com/en_US/i/btn/x-click-but21.gif' border='0' name='submit' alt='Make payments with PayPal - it's fast, free and secure!/' style='cursor:hand; border: 0px;'>
	</form>
	<div class='p'>
		 You can now pay your alumni dues on line via PayPal. Follow the instructions for sending a payment. 
		 The e-mail address associated with the Cornell Acacia PayPal account is AcaciaCorpBoard@cornell.edu. 
	</div>
	<div class='title'>Alumni Dues</div>
	<div class='p'>
		If you have been receiving the Traveler lately, or misplaced your dues notice,
		<a href='./files/dues.pdf'>download the current	Dues Notice for Fall 2004</a>.  
		On this form you can pay your dues, keep the Chapter notified of address 
		changes, and tell us about what's new.
	</div>
	<div class='title'>Find Alumni</div>
	<div class='p'>
		Cornell Acacia is continuing to expand its directory of alumni as well as updating contact information
		as we receive it.  If you are trying to find a Cornell Acacia member, or wish to update your own contact
		information, please use the <a href='./contact.php'>contact form</a> on this website.
	</div>
	<div class='title'>Yahoo! Group</div>
	<div class='p'>The group is a venue for Cornell Acacians to share chapter information such as contact information, 
	fraternity files, and news.  When requesting membership in this group, please provide valid proof of membership in 
	Acacia. Click <a href='http://groups.yahoo.com/group/cornellacacia/'>here</a> to go to the group.</div>

			";	
require 'footer.php';
?>
