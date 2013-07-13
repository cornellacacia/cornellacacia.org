<?php

require './header.php';
require './lib/db.php';

$db = new mysql('localhost', 'musicald_acacia', 'BlAcK&GoLd', 'musicald_acacia');

echo "	<div class='right rtxt'>
					<div class='title'>Brothers</div>";
					
	$q = $db->q("SELECT roll, name, netid FROM actives WHERE roll > 1078 ORDER BY roll ASC");
		while($f = $db->nqf($q)){
			echo "<div class='p'><span class='label'>{$f['roll']}.</span> <a href='#{$f['netid']}'>{$f['name']}</a></div>";
		}
		
echo "
				</div>
				<div class='txt'>
					<div class='th'><img src='./images/title_active.jpg' alt='active brothers' /></div>";

		$q = $db->q("SELECT * FROM actives WHERE roll > 1078 ORDER BY roll ASC");
		while($f = $db->nqf($q)){
				echo "
					<div class='title'><a name='{$f['netid']}'>{$f['name']}</a></div>
					<div class='entry'>
						<div class='p'>
							<table width='100%'>
								<tr>
									<td>
										<table>
											<tr><td class='label'>Roll</td><td>{$f['roll']}</td></tr>
											<tr><td class='label'>Hometown</td><td>{$f['hometown']}</td></tr>
											<tr><td class='label'>College</td><td>{$f['college']}</td></tr>
											<tr><td class='label'>Major</td><td>{$f['major']}</td></tr>
										</table>
									</td>";
				if(file_exists("./images/actives/{$f['roll']}.jpg")){
					echo "<td align='right'><img src='./images/actives/{$f['roll']}.jpg' alt='' height='150' /></td>";
				}
				echo "	</tr>
							</table>
						</div>
						<div class='p'>{$f['bio']}</div>
					</div>";
		}
					
echo "		</div>";

require 'footer.php';

$db->destroy();

?>
