<?php

class perms
{
	
	var $p;
	
	function perms($db, $uid, $group)
	{
		$q = $db->q("SELECT * FROM {$db->pre}perms WHERE user_id='{$uid}' OR group_id='{$group}'");
		$this->p = array();
		while($r = $db->nqf($q))
		{
			$this->p[] = $r['perm'];
		}
		$this->p = array_unique($this->p);
	}
	
	function pass($perm)
	{
		return in_array($perm, $this->p);
	}
}

?>
