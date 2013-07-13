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



class contact extends site

{

	

	function exe()

	{

		$this->temps->get_templates('Contact');

		

		if(isset($this->get['sub'])){

	        $spamquestion = $_POST['spamquestion'];
	        if ($spamquestion != "4")
	        {
	            $out = eval($this->temps->d('LAYOUT'));
				return eval($this->temps->d('MAIN_LAYOUT'));
	        }
			@mail("acacia@cornell.edu", $this->post['subject'], "Sent via www.cornellacacia.org (from IP {$this->server['REMOTE_ADDR']})\r\n\r\n" . $this->post['message'],

								 "To: Cornell Acacia Fraternity <acacia@cornell.edu>\r\n" .

								 "From: {$this->post['name']} <{$this->post['email']}>\r\n" .

								 "Reply-To: {$this->post['name']} <{$this->post['email']}>\r\n" .

								 "X-Mailer: PHP/" . phpversion());

		}

		

		$out = eval($this->temps->d('LAYOUT'));

		return eval($this->temps->d('MAIN_LAYOUT'));

	}

}



?>

