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

class site
{
	
	var $db;
	
	function site()
	{
		$this->self    = $_SERVER['SCRIPT_NAME'];
		$this->qs      = @$_SERVER['QUERY_STRING'];
		$this->post    = $_POST;
 		$this->get     = $_GET;
 		$this->request = $_REQUEST;
		$this->server  = $_SERVER;
		$this->session = &$_SESSION;
		$this->env     = $_ENV;
		$this->files   = $_FILES;
		$this->time    = time();
	}
	
	function set_user()
	{
		$this->user = new user($this->db);
		if(isset($this->request['uid']) && isset($this->request['pass'])){
			$this->user->init_uid($this->request['uid'], $this->request['pass']);
		}else{
			$this->user->init_guest();
		}
	}
	
	function get_pages($rows, $link, $min = 0, $num = 10)
	{
		// some base variables
		$current = ceil($min / $num);
		$string  = null;
		$pages   = ceil($rows / $num);
		$end     = ($pages-1) * $num;

		// check if there's previous articles
		if($min == 0){
			$startlink = '';
			$previouslink = '';
		}else{
			$startlink = "[<a class='pagelinks' href='$this->self?$link&l=0&n=$num'><<</a>]";
			$prev = $min - $num;
			$previouslink = "[<a class='pagelinks' href='$this->self?$link&l=$prev&n=$num'><</a>]";
		}

		// check for next/end
		if(($min + $num) < $rows){
			$next = $min + $num;
  			$nextlink = "[<a class='pagelinks' href='$this->self?$link&l=$next&n=$num'>></a>]";
  			$endlink = "[<a class='pagelinks' href='$this->self?$link&l=$end&n=$num'>>></a>]";
		}else{
  			$nextlink = '';
  			$endlink = '';
		}

		// setup references
		$b = $current - 2;
		$e = $current + 2;

		// set end and beginning of loop
		if($b < 0){
  			$e = $e - $b;
  			$b = 0;
		}

		// check that end coheres to the issues
		if($e > $pages - 1){
  			$b = $b - ($e - $pages + 1);
  			$e = ($pages - 1 < $current) ? $pages : $pages - 1;
  			// b may need adjusting again
  			if($b < 0){
				$b = 0;
			}
		}
 
 		// ellipses
		if($b != 0){ $badd = '...'; }else{ $badd = ''; }
		if($e != $pages - 1 && $pages - 1 > 0){ $eadd = '...'; }else{ $eadd = ''; }

		// run loop for numbers to the page
		for($i = $b; $i < $current; $i++)
		{
			$where = $num * $i;
			$string .= ", <a class='bodylinktype' href='$this->self?$link&l=$where&n=$num'>" . ($i+1) . '</a>';
		}
		
		// add in page
		$string .= ', <b>' . ($current + 1) . '</b>';
		
		// run to the end
		for($i = $current + 1; $i <= $e; $i++)
		{
			$where = $num * $i;
			$string .= ", <a class='bodylinktype' href='$this->self?$link&l=$where&n=$num'>" . ($i+1) . '</a>';
		}

		// get rid of preliminary comma. (optimized by jason: mark uses preg_replace() like candy)
		if(substr($string, 0, 1) == ','){
			$string = substr($string, 1);
		}

		return "$startlink $previouslink $badd $string $eadd $nextlink $endlink";
	}
	
}

?>
