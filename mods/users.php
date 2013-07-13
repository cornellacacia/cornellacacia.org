<?php

class users extends site
{
	function exe()
	{
		$this->temps->get_templates('Users');
		
		if(!isset($this->get['s']))
			$this->get['s'] = 'manage';
		
		if(!$this->user->p->pass('manage_users') && $this->get['s'] != 'manage')
		{
			return eval($this->temps->d('LOCKOUT'));
		}
		
		switch($this->get['s'])
		{
			case 'delete':
				if(isset($this->post['user'])){
					foreach($this->post['user'] as $key => $val)
					{
						$this->db->q("DELETE FROM {$this->db->pre}users WHERE user_id={$key}");
						$this->db->q("DELETE FROM {$this->db->pre}shifts WHERE shift_user={$key}");
					}
				}
				$out = eval($this->temps->d('USER_DELETE'));
				break;
			
			case 'edit':			
				if(!isset($this->get['u'])){
					die('bad params.');
				}
				
				$messages = '';
				if(isset($this->post['user_group'])){
					$uc = $this->db->f("SELECT u.user_id FROM {$this->db->pre}users u WHERE u.user_name='{$this->post['user_name']}'");
					if(isset($uc['user_id']) && $uc['user_id'] != $this->get['u']){ 
						$messages = "You cannot use that username since it is already in use.";
					}
				}
				
				if(!isset($this->post['user_group']) || $messages != ''){
					if(isset($this->post['user_group'])){
						$u = $this->post;
					}else{
						$u = $this->db->f("SELECT u.user_id, u.user_name, u.user_pass, u.user_display, u.user_phone, u.user_email, u.user_group, g.group_name FROM
															{$this->db->pre}users u, {$this->db->pre}groups g WHERE u.user_group = g.group_id AND u.user_id={$this->get['u']}");
					}
					$groups = '';
					$g = $this->db->q("SELECT g.group_id, g.group_name FROM {$this->db->pre}groups g WHERE g.group_id != {$this->set['GUEST_GROUP']} AND g.group_id != {$this->set['ADMIN_GROUP']} ORDER BY g.group_name ASC");
					while($gf = $this->db->nqf($g)){
						$sel = ($gf['group_id'] == $u['user_group']) ? ' SELECTED' : '';
						$groups .= "<option value='{$gf['group_id']}'{$sel}>{$gf['group_name']}</option>\n";
					}
					$out = eval($this->temps->d('USER_EDIT'));
				}else{
					$this->db->q("UPDATE {$this->db->pre}users SET user_name='{$this->post['user_name']}', user_display='{$this->post['user_display']}',
												user_group='{$this->post['user_group']}', user_email='{$this->post['user_email']}', user_phone='{$this->post['user_phone']}'
												WHERE user_id='{$this->get['u']}'");
					$out = eval($this->temps->d('USER_EDIT_SUCCESS'));
				}
				break;
			
			case 'add':
				$messages = '';
				if(isset($this->post['user_group'])){
					$uc = $this->db->f("SELECT u.user_id FROM {$this->db->pre}users u WHERE u.user_name='{$this->post['user_name']}'");
					if(isset($uc['user_id']) && $uc['user_id'] != $this->get['u']){ 
						$messages = "You cannot use that username since it is already in use.";
					}
				}
				
				if(!isset($this->post['user_group']) || $messages != ''){
					if(isset($this->post['user_group'])){
						$u = $this->post;
					}else{
						$u = $this->db->f("SELECT u.user_id, u.user_name, u.user_pass, u.user_display, u.user_phone, u.user_email, u.user_group, g.group_name FROM
															{$this->db->pre}users u, {$this->db->pre}groups g WHERE u.user_group = g.group_id AND u.user_id={$this->get['u']}");
					}
					$groups = '';
					$g = $this->db->q("SELECT g.group_id, g.group_name FROM {$this->db->pre}groups g WHERE g.group_id != {$this->set['GUEST_GROUP']} AND g.group_id != {$this->set['ADMIN_GROUP']} ORDER BY g.group_name ASC");
					while($gf = $this->db->nqf($g)){
						$sel = ($gf['group_id'] == $u['user_group']) ? ' SELECTED' : '';
						$groups .= "<option value='{$gf['group_id']}'{$sel}>{$gf['group_name']}</option>\n";
					}
					$out = eval($this->temps->d('USER_ADD_FORM'));
				}else{
					$this->db->q("INSERT INTO {$this->db->pre}users (user_name, user_display, user_phone, user_group, user_email)
					              VALUES('{$this->post['user_name']}','{$this->post['user_display']}', '{$this->post['user_phone']}',
												       '{$this->post['user_group']}','{$this->post['user_email']}')");
					$out = eval($this->temps->d('USER_ADD_SUCCESS'));
				}
				break;
			
			case 'manage':
			default:
				$users = '';
				$i = 0;
				$q = $this->db->q("SELECT u.user_id, u.user_name, u.user_pass, u.user_display, u.user_phone, u.user_email, g.group_name FROM
														{$this->db->pre}users u, {$this->db->pre}groups g 
														WHERE u.user_group = g.group_id AND 
														g.group_id != {$this->set['GUEST_GROUP']} AND g.group_id != {$this->set['ADMIN_GROUP']}
														ORDER BY u.user_name");
				while($r = $this->db->nqf($q)){
					$users .= eval($this->temps->d('USER_ITEM_ROW'));
					$i = ($i+1) % 2;
				}
				$out = eval($this->temps->d('USER_ITEM_WRAPPER'));
				break;
		}
		return eval($this->temps->d('MAIN_LAYOUT'));
	}
}

?>
