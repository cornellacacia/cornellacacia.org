<?php

class mysql
{
		var $c;
	
		function mysql($host, $user, $pass, $db)
		{
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
		
		function destroy()
		{
			mysql_close($this->c);	
		}
		
}

?>