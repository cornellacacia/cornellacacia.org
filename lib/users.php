<?php

class user
{
	var $db;
	var $u;
	var $p;
	
	// serves to force the application to give it a database object.
	function user($db)
	{
		$this->db = &$db;
	}
	
	function login($username, $pass)
	{
		$u = $this->db->f("SELECT * FROM {$this->db->pre}users u, {$this->db->pre}groups g WHERE u.user_name='{$username}' AND u.user_group = g.group_id");
		if(!isset($u['user_id'])){
			return false;
		}
		// this grabs the password out of web auth (hopefully) and updates it in the database
		$this->db->q("UPDATE {$this->db->pre}users SET user_pass='{$pass}' WHERE user_id='{$u['user_id']}'");
		setcookie('uid', $u['user_id'], time() + 3600, '/');
		setcookie('pass', $pass, time() + 3600, '/');
		$this->p = new perms($this->db, $u['user_id'], $u['user_group']);
		return true;
	}
	
	function logout()
	{
		setcookie('uid', '', time() - 3600, '/');
		setcookie('pass', '', time() - 3600, '/');
	}
	
	// guest attributes overwrite the id to be a -1, this forces
	// permissions for all time for guests are identified by -1, 
	// and ensures mistakes do not ensue.
	function init_uid($uid, $pass)
	{
		$this->u = $this->db->f("SELECT * FROM {$this->db->pre}users u, {$this->db->pre}groups g WHERE u.user_id='{$uid}' AND u.user_pass='{$pass}' AND u.user_group = g.group_id");
		if(!isset($this->u['user_id'])){
			$this->u = $this->db->f("SELECT * FROM {$this->db->pre}users u, {$this->db->pre}groups g WHERE user_name='Guest' AND u.user_group = g.group_id");
			$this->u['user_id'] = -1; // note above.
		}
		$this->p = new perms($this->db, $this->u['user_id'], $this->u['user_group']);
	}
	
	function init_guest()
	{
		$this->u = $this->db->f("SELECT * FROM {$this->db->pre}users u, {$this->db->pre}groups g WHERE user_name='Guest' AND u.user_group = g.group_id");
		$this->u['user_id'] = -1; // note above.
		$this->p = new perms($this->db, $this->u['user_id'], $this->u['user_group']);
	}
}

?>
