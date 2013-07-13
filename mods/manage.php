<?php

/**********************************************************************\
 ** (c) 2006-Present Mark A. Elliot
 ** All code below is given to the Acacia Fraternity for usage only.
 ** This code is not to be copied or replicated without express
 ** permission of its owner, Mark A. Elliot.  Unauthorized replication
 ** of this code elsewhere may result in lawsuit or other legal
 ** intervention.  All rights are granted only to Mark A. Elliot and
 ** modifications to the code are to be marked with the author so that
 ** such code, unless otherwise expressly stated is not subject to
 ** these conditions.  The author provides only one gaurantee,
 ** that this code maybe used for an infinite duration as needed, may
 ** be moved to a new server and reinstalled as required, and is
 ** granted use to the Cornell Chapter of the Acacia Fraternity for
 ** the life of the fraternity as it sees fit.  Otherwise no other
 ** conditions or warantees are granted, the author is not responsible
 ** for maintaining the code, and makes no gaurantee of its security.
\**********************************************************************/

class manage extends site
{
	
	function exe()
	{
		$this->temps->get_templates('Manage');
		
		if(!isset($this->get['s'])){ $this->get['s'] = 'main'; }
		
		if(!$this->user->p->pass('manage_site'))
		{
			return eval($this->temps->d('LOCKOUT'));
		}
		
		switch($this->get['s'])
		{
			case 'news':
				if(!isset($this->get['c'])){ $this->get['c'] = 'view'; }
				switch($this->get['c']){
					case 'hide':
						if(isset($this->get['nid'])){
							$this->db->q("UPDATE {$this->db->pre}news SET visible = !visible WHERE nid={$this->get['nid']}");
						}
						header("Location: http://{$this->server['HTTP_HOST']}{$this->self}?a={$this->get['a']}&s={$this->get['s']}");
						break;
					case 'edit':
						if(isset($this->get['nid'])){
							if(!isset($this->post['subject'])){
								$r = $this->db->f("SELECT * FROM {$this->db->pre}news WHERE nid={$this->get['nid']}");
								$out = eval($this->temps->d('NEWS_EDIT_FORM'));
							}else{
								$this->post['subject'] = htmlentities($this->post['subject'], ENT_QUOTES);
								$this->db->q("UPDATE {$this->db->pre}news SET subject='{$this->post['subject']}', content='{$this->post['content']}' WHERE nid={$this->get['nid']}");
								$out = eval($this->temps->d('NEWS_EDITED'));
							}
						}
						break;
					case 'del':
						if(isset($this->get['nid'])){
							if(isset($this->get['confirm'])){
								$this->db->q("DELETE FROM {$this->db->pre}news WHERE nid={$this->get['nid']}");
								header("Location: http://{$this->server['HTTP_HOST']}{$this->self}?a={$this->get['a']}&s={$this->get['s']}");
							}else{
								$out = eval($this->temps->d('NEWS_CONFIRM_DELETE'));
							}
						}
						break;
					case 'add':
						if(isset($this->post['subject']))
						{
							$this->post['subject'] = htmlentities($this->post['subject'], ENT_QUOTES);
							$this->db->q("INSERT INTO {$this->db->pre}news ( post_date, subject, content, visible )
														VALUES(NOW(), '{$this->post['subject']}', '{$this->post['content']}', 1);");
							$out = eval($this->temps->d('NEWS_ADDED'));
						}
						break;
					default:
						$q = $this->db->q("SELECT * FROM {$this->db->pre}news ORDER BY post_date DESC");
						while($r = $this->db->nqf($q))
						{
							$r['post_date'] = strtotime($r['post_date']);
							$articles .= eval($this->temps->d('NEWS_ITEM'));
						}
						$out = eval($this->temps->d('EDIT_LAYOUT'));
						break;
				}
				break;
			
			case 'users':
				if(!isset($this->get['c'])){ $this->get['c'] = 'main'; }
				switch($this->get['c']){
                    case 'add': //shu added this
                        if(isset($this->get['user_id']))
                        {
                            if(isset($this->post['user_display']))
                            {
                                $sql = "INSERT INTO {$this->db->pre}users (user_id, user_name, user_pass, user_display, user_group,
                                                                           user_email, roll, netid, hometown, gradyear, 
                                                                           college, major, bio)
                                                                   VALUES (LAST_INSERT_ID(),
                                                                           '{$this->post['user_name']}',
                                                                           SHA1('{$this->post['netid']}'),
                                                                           '{$this->post['user_display']}',
                                                                           '{$this->post['user_group']}',
                                                                           '{$this->post['user_email']}',
                                                                           '{$this->post['roll']}',
                                                                           '{$this->post['netid']}',
                                                                           '{$this->post['hometown']}',
                                                                           '{$this->post['gradyear']}',
                                                                           '{$this->post['college']}',
                                                                           '{$this->post['major']}',
                                                                           '{$this->post['bio']}')";
                                echo sha1($this->post['netid']);
                                $this->db->q($sql);
                                //$out = eval($this->temps->d('USER_EDITED'));
                            }
                        }
                        else
                        { $out = eval($this->temps->d('ADD_USER')); }
					case 'edit':
						if(isset($this->get['user_id'])){
							if(isset($this->post['user_display'])){
								$this->db->q("UPDATE {$this->db->pre}users SET 
																			user_display='{$this->post['user_display']}',
																			user_email='{$this->post['user_email']}',
																			roll={$this->post['roll']},
																			netid='{$this->post['netid']}',
																			hometown='{$this->post['hometown']}',
																			gradyear={$this->post['gradyear']},
																			college='{$this->post['college']}',
																			major='{$this->post['major']}',
																			bio='{$this->post['bio']}'
																			WHERE user_id={$this->get['user_id']}");
								$out = eval($this->temps->d('USER_EDITED'));
							}else{
								$r = $this->db->f("SELECT * FROM {$this->db->pre}users WHERE user_id={$this->get['user_id']}");
								$out = eval($this->temps->d('EDIT_USER'));
							}
						}
						break;
					case 'del':
						if(isset($this->get['user_id'])){
							if(isset($this->get['confirm'])){
								$this->db->q("DELETE FROM {$this->db->pre}users WHERE user_id={$this->get['user_id']}");
								header("Location: http://{$this->server['HTTP_HOST']}{$this->self}?a={$this->get['a']}&s={$this->get['s']}");
							}else{
								$out = eval($this->temps->d('USER_CONFIRM_DELETE'));
							}
						}
						break;
					case 'hide':
						if(isset($this->get['user_id'])){
							$this->db->q("UPDATE {$this->db->pre}users SET display = !display WHERE user_id={$this->get['user_id']}");
						}
						header("Location: http://{$this->server['HTTP_HOST']}{$this->self}?a={$this->get['a']}&s={$this->get['s']}");
						break;
						
					default:
						$user_list = '';
						$q = $this->db->q("SELECT * FROM {$this->db->pre}users ORDER BY roll ASC");
						while($r = $this->db->nqf($q))
						{
							$user_list .= eval($this->temps->d('USER_LIST_ITEM'));
						}					
						$out = eval($this->temps->d('USER_LIST'));
						break;
				}
				break;
				
			case 'main':
			default:
				$out = eval($this->temps->d('MANAGE_MENU'));
				break;
		}
		
		return eval($this->temps->d('MAIN_LAYOUT'));
	}
}

?>
