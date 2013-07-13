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



class scholarship extends site
{
	function exe()
	{
		$this->temps->get_templates('Scholarship');
		
		$q = $this->db->q("SELECT * FROM {$this->db->pre}display WHERE page = 'scholarship'");
		$r = $this->db->nqf($q);

        if(isset($this->get['sub']))
        {
            $fields = $this->post;
            $text = '';
            foreach($fields as $key => $val)
            { 
                $text .= $key.": ".$val."\n";
                switch($key)
                {
                    case 'first_name':
                    case 'last_name':
                    case 'netid':
                    case 'email':
                        if($val == '')
                        {
                            $err = "First and last name as well as your netid and email are required.";
                            $out = eval($this->temps->d('LAYOUT'));
                            return eval($this->temps->d('MAIN_LAYOUT'));
                        }
                        break;
                    default:
                        break;
                }
            }

            @mail("acacia.apps@gmail.com", 
                  $this->post['first_name']." ".$this->post['last_name'], 
                  "Sent via www.cornellacacia.org (from IP {$this->server['REMOTE_ADDR']})\r\n\r\n" . $text);
            $out = eval($this->temps->d('APP_ACCEPTED'));
        }
        else
        {
            if($r['display'] == 1)
            { $out = eval($this->temps->d('FORM')); }
            else
            { $out = eval($this->temps->d('LAYOUT')); }
        }

		return eval($this->temps->d('MAIN_LAYOUT'));
	}
}

?>

