<?php

class logout extends site
{
	
	function exe()
	{
		$this->temps->get_templates('Login');
		$this->user->logout();
		$out = eval($this->temps->d('LOGOUT'));
		return eval($this->temps->d('MAIN_LAYOUT'));
	}
}

?>
