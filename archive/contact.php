<?php

/**
					<div class='title'>Map</div>
					<div class='p'>The following map gives a quick guide to get to Northcote from the
					Cornell Campus, our address and phone number appear below the map.</div>
					<div class='p'><img src='./images/map.jpg' alt='map'/></div>
*/


require './header.php';

echo "	<div class='right rtxt'>
					<img src='./images/house_img.jpg' alt='Northcote' width='250' />
					Northcote (home to the 14th Chapter of the international Acacia Fraternity)<br/><br/>
					<div class='center rtxt'>
                    <a href='./images/map_large.gif'><img src='./images/map_small.gif' alt='click for a larger map' width='250' border='1' /></a><br/>
                    click the image above for a larger map
                    <br/><br/><br/>
                    </div>
				</div>
				<div class='txt'>
					<div class='th'><img src='./images/title_contact.jpg' alt='contact us' /></div>

					<div class='title'>Address</div>
					<div class='p'>318 Highland Road<br/>Ithaca, NY 14850</div>
					<div class='title'>Phone Number</div>
					<div class='p'>607 257 7055</div>
					<div class='title'>Send a Message</div>
					<div class='p'>Please use the accompanying form below to send us questions, comments,
					or concerns regarding the website, our events, or any of our many activities.  We
					will attempt to respond to your message promptly.  If you wish us to contact you by
					alternate means please say so in your message and we will attempt to do so.</div>
				
					";
					if(!isset($_GET['a'])){
						echo "
							<form method='post' action='{$_SERVER['PHP_SELF']}?a=sub'>
							<div class='p'>name <input type='text' size='30' name='name' /></div>
							<div class='p'>email <input type='text' size='30' name='email' /></div>
							<div class='p'>subject <input type='text' size='40' name='subject' /></div>
							<div class='p'>message<br/>
							<textarea name='message' style='width: 90%; height: 150px;'></textarea></div>
							</div>
							<div class='p'><input type='submit' name='submit' value='Send Message'/></div>
							</form>";
					}else{
						/*@mail("acacia@cornell.edu", $_POST['subject'], "Sent via www.cornellacacia.org (from IP {$_SERVER['REMOTE_ADDR']})\r\n\r\n" . $_POST['message'],
								 "To: Cornell Acacia Fraternity <acacia@cornell.edu>\r\n" .
								 "From: {$_POST['name']} <{$_POST['email']}>\r\n" .
								 "Reply-To: {$_POST['name']} <{$_POST['email']}>\r\n" .
								 "X-Mailer: PHP/" . phpversion());
						echo "<div class='p'><strong>Your message has been sent!</strong></div>";*/ echo "<div class='p'>We failed to send your message</div>";
					}
				echo "
				</div>";
				
require 'footer.php';

?>
