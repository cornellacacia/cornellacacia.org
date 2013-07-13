<?php

class login extends site
{
	
	function exe()
	{
		$this->temps->get_templates('Login');
		if(isset($this->post['username'])){
			if($this->user->login($this->post['username'], sha1($this->post['password'])))
			{
				$out = eval($this->temps->d('LOGIN_SUCCESS'));
			}else{
				$out = eval($this->temps->d('LOGIN_FAILURE'));
			}
		}else{
			$out = eval($this->temps->d('LOGIN_FORM'));
		}
		return eval($this->temps->d('MAIN_LAYOUT'));
	}
}

?>
