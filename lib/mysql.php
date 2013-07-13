<?php

class db
{
		var $c;
		var $qstore = array();
	
		function db($host, $user, $pass, $db, $prefix)
		{
			$this->pre = $prefix;
			$this->c = $this->conn($host, $user, $pass);
			$this->sel_db($db);
		}
		
		function conn($host, $user, $pass)
		{
			return mysql_connect($host, $user, $pass);	
		}
		
		function sel_db($db)
		{
			return mysql_select_db($db);	
		}
		
		function q($q)
		{
			$this->qstore[] = $q;
			return mysql_query($q);	
		}
		
		function nqf($q)
		{
			return mysql_fetch_array($q);	
		}
		
		function nqfo($q)
		{
			return mysql_fetch_object($q);	
		}
		
		function f($q)
		{
			return $this->nqf($this->q($q));	
		}
		
		function fo($q)
		{
			return $this->nqfo($this->q($q));	
		}
		
		function close()
		{
			mysql_close($this->c);	
		}
		
		function nr($q)
		{
			return mysql_num_rows($q);
		}
		
}

?>