<?php

session_start();

require './header.php';
require './lib/db.php';

$_SESSION['id'] = session_id();
$SC_EMAIL = "kjy3@cornell.edu";
$SC_NAME  = "Keith Yoder";


$TO = "{$SC_NAME} <{$SC_EMAIL}>";

$db = new mysql('localhost', 'musicald_acacia', 'BlAcK&GoLd', 'musicald_acacia');

echo "  <div class='right rtxt'>
                    <img src='./images/house_img.jpg' alt='Northcote' width='250' />
                    Northcote (home to the 14th Chapter of the international Acacia Fraternity)<br/><br/><br/><br/><br/>
                </div>
                <div class='txt'>
                    <div class='th'><img src='./images/title_scholarship.jpg' alt='scholarship' /></div>
                    <div class='title'>Apply</div>
                    <div class='p'>Please use the form below to apply for the scholarship.  Any questions, comments or concerns
                    should be directed to <a href='mailto:{$SC_EMAIL}'>{$SC_NAME}</a>.</div>";
                    if(!isset($_GET['a'])){
                        echo "
                            <form method='post' action='{$_SERVER['PHP_SELF']}?a=sub'>
                            <div class='entry'>
                                <div class='p'>First Name <input type='text' size='30' name='first_name' /></div>
                                <div class='p'>Last Name  <input type='text' size='30' name='last_name' /></div>
                                <div class='p'>Home Town  <input type='text' size='30' name='home_town' /></div>
                                <div class='p'>Home State <input type='text' size='30' name='home_state' /></div>
                            </div>
                            <div class='entry'>
                                <div class='p'>NETID <input type='text' size='10' name='netid' /></div>
                                <div class='p'>Dorm <input type='text' size='40' name='dorm' /></div>
                                <div class='p'>Room Phone Number <input type='text' size='15' name='room_phone' /></div>
                                <div class='p'>Local Telephone <input type='text' size='15' name='local_telephone' /></div>
                            </div>
                            <div class='entry'>
                                <div class='p'>College enrolled in at Cornell <input type='text' size='20' name='college' /></div>
                                <div class='p'>Intended Major <input type='text' size='40' name='intended_major' /></div>
                            </div>
                            <div class='entry'>
                                <div class='p'>What clubs and extracurricular activites have you been a member of in the past? (2-3 sentences please)<br/>
                                <textarea style='width: 90%; height: 100px;' name='extracuricular'></textarea></div>
                            </div>
                            <div class='entry'>
                                <div class='p'>Briefly describe your past community service involvement (please be brief).<br/>
                                <textarea style='width: 90%; height: 150px;' name='comm_serv'></textarea></div>
                            </div>
                            <div class='entry'>
                                 <div class='p'>List any awards or honors you have earned that you feel exemplify your character (please be brief).<br/>
                                 <textarea style='width: 90%; height: 150px;' name='awards'></textarea></div>
                            </div>
                            <div class='entry'>
                                 <div class='p'>Discuss one or two interesting classes you have taken in the past and why they left an impression on you (please be brief).<br/>
                                 <textarea style='width: 90%; height: 150px;' name='classes'></textarea></div>
                            </div>
                            <div class='entry'>
                                <div class='p'>How would you classify your position in your high school class?</div>
                                <div class='p'><input type='radio' name='hs_rank' value='10'/> Top 10%</div>
                                <div class='p'><input type='radio' name='hs_rank' value='20'/> Top 20%</div>
                                <div class='p'><input type='radio' name='hs_rank' value='50'/> Top 50%</div>
                                <div class='p'><input type='radio' name='hs_rank' value='Other'/>Other</div>
                            </div>
                            <div class='entry'>
                                <div class='p'>List three personal goals you would like to accomplish while at Cornell:</div>
                                <div class='p'>1. <input type='text' size='40' name='goal_1' /></div>
                                <div class='p'>2. <input type='text' size='40' name='goal_2' /></div>
                                <div class='p'>3. <input type='text' size='40' name='goal_3' /></div>
                            </div>
                            <div class='entry'>
                                <div class='p'>Describe any leadership experience you may have had in the past: (5-6 sentences please)<br/>
                                <textarea style='width: 90%; height: 200px;' name='leadership'></textarea></div>
                            </div>
                            <div class='entry'>
                                <div class='p'>Please let us know how you heard about our scholorship.</div>
                                <div class='p'><input type='radio' name='heard' value='E-Mail' CHECKED/> E-mail</div>
                                <div class='p'><input type='radio' name='heard' value='Snail Mail'/> Snail Mail</div>
                                <div class='p'><input type='radio' name='heard' value='Flyer/Quarter Card'/> Flyer/Quarter Card</div>
                                <div class='p'><input type='radio' name='heard' value='Word of Mouth'/> Word of Mouth</div>
                                <div class='p'><input type='radio' name='heard' value='Other'/> Other - Indicate here <input type='textbox' name='other' size='20'/></div>
                            </div>
														<div class='entry'>
															<div class='p'>In order to prevent automatic submissions of this form we ask that you type
															the text that appears in the image below in the box underneath. For clarity purposes, there are
															no zeros (0) in the text. Also note that this field is <strong>case sensitive</strong>.</div>
															<div class='p'><img src='./security/random.php?s={$_SESSION['id']}' alt='AUTHORIZATION IMAGE REQUIRED'/></div>
															<div class='p'><input type='text' name='authkey' value='' size='10'/></div>
														</div>
                            <div class='entry'>
                                <div class='p'><input type='submit' name='submit' value='Submit Application'/></div>
                            </div>
                            </form>";
                    }else{
                        if($_POST['heard'] == 'Other'){ $_POST['heard'] = $_POST['other']; }
												
												$g = $db->f("SELECT count(*) as count FROM imgauth WHERE sess_id='{$_SESSION['id']}'");
												$f = $db->f("SELECT authkey FROM imgauth WHERE sess_id='{$_SESSION['id']}' ORDER BY stamp DESC");
												if($_POST['authkey'] == '' || $g['count'] < 1 || $_POST['authkey'] != $f['authkey']){
													echo "<div class='p'><strong>You failed to correctly match the anti-spam verification.  Please press
													your browser's back button and try again.</strong></div>";
												}else{
													if(mail("{$TO}", "Scholarship Application",
"Name:  {$_POST['first_name']} {$_POST['last_name']}
Town:  {$_POST['home_town']}
State: {$_POST['home_state']}
NETID: {$_POST['netid']}
Dorm:  {$_POST['dorm']}
Room Phone:  {$_POST['room_phone']}
Local Phone: {$_POST['local_telephone']}

College:        {$_POST['college']}
Intended Major: {$_POST['intended_major']}

Clubs/Extracuricular Activities:
{$_POST['extracuricular']}

Community Service:
{$_POST['comm_serv']}

Awards or Honors:
{$_POST['awards']}

Interesting Classes:
{$_POST['classes']}

HS Rank: {$_POST['hs_rank']}

Personal Goals:
1. {$_POST['goal_1']}
2. {$_POST['goal_2']}
3. {$_POST['goal_3']}

Leadership Experience:
{$_POST['leadership']}

Heard about the scholorship: {$_POST['heard']}",
																		"To: {$TO}\r\n" .
																	 "From: {$_POST['first_name']} {$_POST['last_name']} <{$_POST['netid']}@cornell.edu>\r\n" .
																	 "Reply-To: {$_POST['first_name']} {$_POST['last_name']} <{$_POST['netid']}@cornell.edu>\r\n")){
																			 echo "<div class='p'><strong>Your application has been submitted!</strong><br/><br/><br/><br/><br/>&nbsp;</div>";
																	 }else{
																			 echo "<div class='p'><strong>There was an error submitting your application.  This is likely due to missing fields.  Please press your browsers back button, check your answers, and attempt to submit again.  Continuing problems should be emailled to Eric Fish, contact information above.</strong><br/><br/><br/><br/><br/>&nbsp;</div>";
																	 }
												}
                    }
                echo "
                </div>";
                
require 'footer.php';

?>