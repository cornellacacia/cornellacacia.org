<?php

class cc extends site
{
    function exe()
    {
        $this->temps->get_templates('CC');
        if(!isset($this->get['s']))
        { $this->get['s'] = 'main'; }

        $out = eval($this->temps->d('CC_SIDEBAR'));
        switch($this->get['s'])
        {
            case 'donors':
                $out .= eval($this->temps->d('CC_DONORS'));
                break;
            case 'contact':
                $out .= eval($this->temps->d('CC_CONTACT'));
                break;
            case 'goal':
                $out .= eval($this->temps->d('CC_GOAL'));
                break;
            case 'testmail':
                $to = "nsantorello@gmail.com";
                $subject = "test email";
                $message = "this is a test message";
                // headers
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: ' . $email . "\r\n";
                
                // Mail it
                mail($to, $subject, $message, $headers);
                $out .= "mail sent successfully";
                break;
            case 'reason':
                $out .= eval($this->temps->d('CC_REASON'));
                break;
            case 'guide':
                $out .= eval($this->temps->d('CC_GUIDE'));
                break;
            case 'litform':
                $out .= eval($this->temps->d('CC_LIT_FORMS'));
                break;
            case 'reserve':
                $out .= eval($this->temps->d('CC_RESERVE'));
                break;
			case 'reserved':
				$name = $_POST['name'];
				$roll_number = $_POST['roll_number'];
				$pledge_year = $_POST['pledge_year'];
				$class_year = $_POST['class_year'];
				$address = $_POST['address'];
				$city = $_POST['city'];
				$state = $_POST['state'];
				$zip_code = $_POST['zip_code'];
				$email = $_POST['email'];
				$attendance = isset($_POST['attendance']) ? 'Yes' : 'No';
				$contribute = isset($_POST['contribute']) ? 'Yes' : 'No';
				$amount = '';
				$payby = '';
				switch ($_POST['amount']) {
					case '50':
						$amount = '50';
						break;
					case '100':
						$amount = '100';
						break;
					case '250':
						$amount = '250';
						break;
					case '500':
						$amount = '500';
						break;
					case 'other':
						$amount = $_POST['other_amount'];
						break;					
				}
				if ($_POST['payby'] == 'check') {
					$payby = 'Check';
				} elseif ($_POST['payby'] == 'paypal') {
					$payby = 'Paypal';
				}
				$num_guests = $_POST['num_guests'];

                $to = 'zyloch@gmail.com' . ', ';
                $to .= 'nortantivirus@gmail.com' . ', ';
                $to .= 'sls8@cornell.edu' . ', ';
                $to .= 'pgm1014@optonline.net' . ', ';
                $to .= 'nsantorello@gmail.com' . ', ';
                $to .= 'tbalcerski@gmail.com' . ', ';
                $to .= 'pwshimer@comcast.net';

				// subject
				$subject = 'Reservation for Centennial+5 Celebration';

				// message
				$message = '
				<html>
				<body>
				Name: ' . $name . '<br/>
				Pledge Year: ' . $pledge_year . '<br/>
				Class Year: ' . $class_year . '<br/>
				Address: ' . $address . '<br/>
				City: ' . $city . '<br/>
				State: ' . $state . '<br/>
				Zip Code: ' . $zip_code . '<br/>
				Attendance: ' . $attendance . '<br/>
				Number of guests: ' . $num_guests . '<br/>
				Contribute: ' . $contribute . '<br/>
				Amount of contribution: ' . $amount . '<br/>
				Paying by: ' . $payby . '
				</body>
				</html>
				'
				;
				
				// headers
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: ' . $email . "\r\n";
				
				// Mail it
				mail($to, $subject, $message, $headers);

                $out .= eval($this->temps->d('CC_RESERVED'));
                break;
			case 'register':
                $out .= eval($this->temps->d('CC_REGISTER'));
                break;
            case 'registered':
				$name = $_POST['name'];
				$pledge_year = $_POST['pledge_year'];
				$class_year = $_POST['class_year'];
				$address = $_POST['address'];
				$city = $_POST['city'];
				$state = $_POST['state'];
				$zip_code = $_POST['zip_code'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
                $finalcost = $_POST['finalcost'];
                $spamquestion = $_POST['spamquestion'];
                if ($spamquestion != "4")
                {
                    $out .= eval($this->temps->d('CC_REGISTER'));
                    break;
                }
				
				$attendance = isset($_POST['attendance']) ? 'Yes' : 'No';
				$num_guests = $_POST['num_guests'];
				$num_child_guests = $_POST['num_child_guests'];
				$guest_one_name = $_POST['guest_one_name'];
				$guest_one_year = $_POST['guest_one_year'];
				$guest_two_name = $_POST['guest_two_name'];
				$guest_two_year = $_POST['guest_two_year'];
				$guest_three_name = $_POST['guest_three_name'];
				$guest_three_year = $_POST['guest_three_year'];
				$arriving = isset($_POST['arriving']) ? 'Yes' : 'No';
				$attending_tour = isset($_POST['attending_tour']) ? 'Yes' : 'No';
				$attending_sat_lunch = isset($_POST['attending_sat_lunch']) ? 'Yes' : 'No';
				$attending_sun_brunch = isset($_POST['attending_sun_brunch']) ? 'Yes' : 'No';
				$food_concerns = $_POST['food_concerns'];
				
				$amount = '';
				$payby = '';
				switch ($_POST['amount']) {
					case '0':
						$amount = '0';
						break;
					case '50':
						$amount = '50';
						break;
					case '100':
						$amount = '100';
						break;
					case '250':
						$amount = '250';
						break;
					case '500':
						$amount = '500';
						break;
					case 'other':
						$amount = $_POST['other_amount'];
						break;					
				}
				if ($_POST['payby'] == 'check') {
					$payby = 'Check';
				} elseif ($_POST['payby'] == 'paypal') {
					$payby = 'Paypal';
				}
				
				//$to = 'skiffsoft@gmail.com' . ', ';
				$to = 'zyloch@gmail.com' . ', ';
				$to .= 'nortantivirus@gmail.com' . ', ';
				$to .= 'sls8@cornell.edu' . ', ';
                $to .= 'pgm1014@optonline.net' . ', ';
                $to .= 'nsantorello@gmail.com' . ', ';
                $to .= 'tbalcerski@gmail.com' . ', ';
				$to .= 'pwshimer@comcast.net';

				// subject
				$subject = 'Registration for Centennial+5 Celebration';

				// message
				$message = '
				<html>
				<body>
				<table border="0">
				<tr><td>Name: </td><td>' . $name . '</td></tr>
				<tr><td>Pledge Year: </td><td>' . $pledge_year . '</td></tr>
				<tr><td>Class Year: </td><td>' . $class_year . '</td></tr>
				<tr><td>Address: </td><td>' . $address . '</td></tr>
				<tr><td>City: </td><td>' . $city . '</td></tr>
				<tr><td>State: </td><td>' . $state . '</td></tr>
				<tr><td>Zip Code: </td><td>' . $zip_code . '</td></tr>
				<tr><td>Email: </td><td>' . $email . '</td></tr>
				<tr><td>Phone: </td><td>' . $phone . '</td></tr>
				</table>
				
				<hr/>
				
				<table border="0">
				<tr><td>Attendance: </td><td>' . $attendance . '</td></tr>
				<tr><td>Arriving Prior to "' . $arriving_by . '": </td><td>' . $arriving . '</td></tr>
				<tr><td>Number of Adult Guests: </td><td>' . $num_guests . '</td></tr>
				<tr><td>Number of Children: </td><td>' . $num_child_guests . '</td></tr>
				</table>
				
				<table border="0">
				<tr><td>Guests:</td><td></td></tr>
					<tr><td></td><td>' . $guest_one_name . ' (Class of ' . $guest_one_year . ')</td></tr>
					<tr><td></td><td>' . $guest_two_name . ' (Class of ' . $guest_two_year . ')</td></tr>
					<tr><td></td><td>' . $guest_three_name . ' (Class of ' . $guest_three_year . ')</td></tr>
				</table>
				
				<table border="0">
				<tr><td>Interested in Attending: </td><td></td><td></td></tr>
					<tr><td></td><td>Sat. AM House Tour: </td><td>' . $attending_tour . '</td></tr>
					<tr><td></td><td>Sat. Lunch: </td><td>' . $attending_sat_lunch . '</td></tr>
					<tr><td></td><td>Sun. Brunch: </td><td>' . $attending_sun_brunch . '</td></tr>
				</table>
				
				<hr/>
				
				<table border="0">
				<tr><td>Amount of contribution: </td><td>' . $amount . '</td></tr>
				<tr><td>Paying by: </td><td>' . $payby . '</td></tr>
				</table>
				</body>
				</html>
				'
				;
				
				// headers
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: ' . $email . "\r\n";
				
				// Mail it
				mail($to, $subject, $message, $headers);
                $out .= eval($this->temps->d('CC_REGISTERED'));
                break;
/*                
            case 'documentary':
                if(isset($this->get['done']))
                {
                    $fields = $this->post;
                    $text = $this->post['text'];
           
                    //@mail("tbalcerski@gmail.com", 
                    //@mail("sls8@cornell.edu, tjb36@cornell.edu, pgm1014@optonline.net", 
                    @mail("shoebox.junkmail@gmail.com",
                    //@mail("nks25@cornell.edu", 
                    "Documentary Order Form", 
                    "Sent via www.cornellacacia.org\n$text");
                    $method = $this->get['method'];
                    $total = $this->get['total'];
                    if($method == 'mail')
                    {
                        $new_action = "<div class='p'>Thank you for purchasing this documentary.  
                            Please send check or money order, made out to <i>Acacia Fraternity Foundation</i> for $" . $total . ", to:</div>
                            <center><b>Acacia Fraternity<br>
                            c/o Alumni Affairs<br>
                            318 Highland Rd<br>
                            Ithaca, NY 14850</b></center>";
                        $paypal = '';
                    }
                    else
                    {
                        $new_action = "<div class='p'>Thank you for purchasing this documentary. 
                            Click below to make a payment by PayPal.</div>";
                        $paypal = "<input type='submit' value='Pay via PayPal'>";
                    }
                    $out = eval($this->temps->d('CC_DOCU_THX'));
                }
                else if(isset($this->get['sub']) && $_SESSION['AntiSpamImage'] == $_REQUEST['anti_spam_code'])
                {
                    $fields = $this->post;
                    $text = '';

                    

                    $quantity = $this->post['quantity'];
                    $total = $quantity * 10.00;
                    $method = $this->post['payment_type'];
                    $paymeth = ($method == 'paypal') ? 'PayPal' : 'Check sent via US Mail';
                    $text = "\nName: " . $this->post['name'];
                    $text .= "\nAddress: " . $this->post['address'];
                    $text .= "\nQuantity: " . $quantity;
                    $text .= "\nPayment Method: " . $paymeth;
                    $action = "./index.php?a=cc&s=documentary&done=1&method=".$method."&total=".$total;
                    $out = eval($this->temps->d('CC_DOCU_CONFIRM'));
                }
                else
                    $out = eval($this->temps->d('CC_DOCUMENTARY'));
                break;
            case 'pics':
                $out = eval($this->temps->d('CC_PICS'));
                break;
 */               
            case 'book':/*
                if(isset($this->get['done']))
                {
                    $fields = $this->post;
                    $text = $this->post['text'];


                    //@mail("tbalcerski@gmail.com", 
                    //@mail("sls8@cornell.edu, tjb36@cornell.edu", 
                    @mail("shoebox.junkmail@gmail.com",
                    //@mail("nks25@cornell.edu", 
                    "Book Order Form", 
                    "Sent via www.cornellacacia.org\n$text");
                    $total = $this->get['total'];
                    if($this->get['method'] == 'mail')
                    {
                        $new_action = "<div class='p'>Thank you for purchasing this book.  
                            Please send check or money order, made out to <i>Acacia Fraternity Foundation</i> for $".$total." to:</div>
                            <center><b>Acacia Fraternity<br>
                            c/o Alumni Affairs<br>
                            318 Highland Rd.<br>
                            Ithaca, NY 14850</b></center>";
                        $paypal = '';
                    }
                    else
                    {
                        $new_action = "<div class='p'>Thank you for purchasing this book. 
                            Click below to make a payment by PayPal.</div>";
                        $paypal = "<input type='submit' value='Pay via PayPal'>";
                    }
                    
                    $out = eval($this->temps->d('CC_BOOK_THX'));
                }
                 else if(isset($this->get['sub']) && $_SESSION['AntiSpamImage'] == $_REQUEST['anti_spam_code'])
                {
                    $fields = $this->post;
                    $text = '';
                    foreach($fields as $key=>$val)
                        $text .= "$key: $val\n";

                    //@mail("tbalcerski@gmail.com", 
                    //@mail("sls8@cornell.edu, tjb36@cornell.edu", 
                    //@mail("nks25@cornell.edu", 
                    //"Book Order Form", 
                    //"Sent via www.cornellacacia.org\n$text");

                    $cover = $this->post['cover_type'];
                    $method = $this->post['payment_type'];
                    
                    $text = "\nName: " . $this->post['name'];
                    $text .= "\nAddress: " . $this->post['address'];
                    
                    $price = (($cover == 'soft') ? '14.95' : '29.95');
                    $total = $price + 5;
                    $paymeth = ($method == 'paypal') ? 'PayPal' : 'Check sent via US Mail';
                    $action = "./index.php?a=cc&s=book&done=1&method=".$method."&total=".$total;
                    $softhard = (($cover == 'soft') ? 'soft cover' : 'hard cover');
                    $text .= "\nCover: " . $softhard;
                    $text .= "\nPayment Method: " . $paymeth;
                    $out = eval($this->temps->d('CC_BOOK_CONFIRM'));
                    //$out = eval($this->temps->d('CC_BOOK_THX'));
                }
                else
                {
                    @session_start();
                    $_SESSION['AntiSpamImage'] = rand(1,9999999);*/
                    $out = eval($this->temps->d('CC_BOOK'));
                //}
                break;
            case 'donation':
                $err = false;
                $err_msg = "";
                if(isset($this->get['done']))
                {
 //@mail("tbalcerski@gmail.com", 
                   @mail("sls8@cornell.edu, tjb36@cornell.edu, bja27@cornell.edu", 
                   //@mail("nks25@cornell.edu", 
                   "Donation Form", 
                   "Sent via www.cornellacacia.org (from IP {$this->server['REMOTE_ADDR']})\r\n\r\n" . $this->post['text']);

                    $firstpayment = $this->get['firstpayment'];
                    if (!isset($this->get['paypalnow']))
                        $out .= eval($this->temps->d('CC_THANKYOU'));
                    else
                        $out .= eval($this->temps->d('CC_THANKYOUPAYPAL'));
                    break;
                }
                if(isset($this->get['sub']))
                {
                    $fields = $this->post;
                    $c3 = 0;
                    $c2 = 0;
                    $c1 = 0;
                    $c0 = 0;
                    foreach($fields as $key=>$val)
                    {
                        switch($key)
                        {
                            // check to see if they mark boxes across donation levels.
                            case 'poloc2':
                            case 'tshirtc2':
                            case 'mugc2':
                                $c2++;
                                if($c2 > 2 ||$c3 != 0 || $c1 != 0 || $c0 != 0)
                                    $err = true;
                                $repost .= "<input type='hidden' name='$key' value='$val'>\n";
                                break;
                            case 'tshirtc0':
                            case 'mugc0':
                                $c0++;
                                if($c0 > 1 || $c2 != 0 || $c3 != 0 || $c1 != 0)
                                    $err = true;
                                $repost .= "<input type='hidden' name='$key' value='$val'>\n";
                                break;
                            case 'poloc1':
                            case 'tshirtc1':
                            case 'mugc1':
                                $c1++;
                                if($c1 > 1 || $c2 != 0 || $c3 != 0 || $c0 != 0)
                                    $err = true;
                                $repost .= "<input type='hidden' name='$key' value='$val'>\n";
                                break;
                            case 'polo':
                            case 'tshirt':
                            case 'mug':
                                $c3++;
                                if($c2 != 0 || $c1 != 0 || $c0 != 0)
                                    $err = true;
                                $repost .= "<input type='hidden' name='$key' value='$val'>\n";
                                break;
                            case 'tsize': 
                                $this->post["t$val"] = "checked";
                                $repost .= "<input type='hidden' name='t$val' value='Checked'>\n";
                                break;
                            case 'psize':
                                $this->post["p$val"] = "checked";
                                $repost .= "<input type='hidden' name='p$val' value='Checked'>\n";
                                break;
                            case 'name':
                            case 'class_year':
                            case 'total':
                            case 'add_info':
                            case 'first_payment':
                            case 'first_corp':
                            case 'first_found':
                                $text .= "$key: $val\n";
                            default:
                                $repost .= "<input type='hidden' name='$key' value='$val'>\n";
                        }
                    }
                    $fields = $this->post;
                    if($err)
                        $err_msg .= "<div class='p'><b>Please correct your gift selection.</b></div>";

                    $name = $fields['name'];
                    $class_year = $fields['class_year'];
                    $total = $fields['total'];
                    $tot = $fields['tot'];

                    $d = "\$";
                    $add_info = $fields['add_info'];
                    $first_payment = $d.$fields['first_payment'];
                    $first_corp = $d.$fields['first_corp'];
                    $first_found = $d.$fields['first_found'];

                    $yearly_tot = array('2007'=>$d.$fields['07tot'], '2008'=>$d.$fields['08tot'],
                        '2009'=>$d.$fields['09tot'],'2010'=>$d.$fields['10tot'],'2011'=>$d.$fields['11tot'],'total'=>$d.$fields['tot']);
                    $yearly_tot_corp = array('2007'=>$d.$fields['corp07'], '2008'=>$d.$fields['corp08'],
                        '2009'=>$d.$fields['corp09'],'2010'=>$d.$fields['corp10'],'2011'=>$d.$fields['corp11'],'total'=>$d.$fields['corptot']);
                    $yearly_tot_found = array('2007'=>$d.$fields['found07'], '2008'=>$d.$fields['found08'],
                        '2009'=>$d.$fields['found09'],'2010'=>$d.$fields['found10'],'2011'=>$d.$fields['found11'],'total'=>$d.$fields['foundtot']);

                    $text .= "Yearly Totals:\n";
                    foreach($yearly_tot as $key=>$val)
                        $text .= "$key: $val\n";
                    $text .= "Yearly Total to Corporation:\n";
                    foreach($yearly_tot_corp as $key=>$val)
                        $text .= "$key: $val\n";
                    $text .= "Yearly Total to Foundation:\n";
                    foreach($yearly_tot_found as $key=>$val)
                        $text .= "$key: $val\n";

                    if(isset($fields['anon']))
                    {
                        $anon = "<div class='title'>Anonymity</div><div class='p'>You have opted to remain <b>anonymous</b>.</div>";
                        $text .= "This donor wants to remain anonymous.\n";
                    }

                    $text .= "Gifts:\n";
                    if(isset($fields['book']))
                    {
                        $book = "<div class='p'>You have chosen to receive <i>Cornell Acacia: The First Century</i>.</div>";
                        $text .= "Book\n";
                    }
                    

                    $polo = isset($fields['polo']);
                    $tshirt = isset($fields['tshirt']);
                    $mug = isset($fields['mug']);
                    $poloc2 = isset($fields['poloc2']);
                    $tshirtc2 = isset($fields['tshirtc2']);
                    $mugc2 = isset($fields['mugc2']);
                    $poloc1 = isset($fields['poloc1']);
                    $tshirtc1 = isset($fields['tshirtc1']);
                    $mugc1 = isset($fields['mugc1']);
                    $poloc1 = isset($fields['poloc1']);
                    $mugc0 = isset($fields['mugc0']);
                    $tshirtc0 = isset($fields['tshirt0']);

                    $want_polo = ($polo || $poloc2 || $poloc1) ? true : false;
                    $want_tshirt = ($tshirt || $tshirtc2 || $tshirtc1 || $tshirtc0) ? true : false;
                    $want_mug = ($mug || $mugc2 || $mugc1 || $mugc0) ? true : false;

                    $size_map = array('s'=>'a small', 
                                      'm'=>'a medium', 
                                      'l'=>'a large', 
                                      'xl'=>'an extra large', 
                                      'xxl'=>'an extra extra large');

                    $psize = $fields['psize'];
                    $tsize = $fields['tsize'];

                    if($want_polo)
                    {
                        if(!isset($fields['psize']))
                        {
                            $err = true;
                            $err_msg .= "<div class='p'><b>Please select a size for your polo shirt.<b></div>";
                        }
                        else
                        {
                            $polo = "<div class='p'>You have chosen <b>".$size_map[$psize]." polo shirt</b>.</div>";
                            $text .= $size_map[$psize]." Polo\n";
                        }
                    }

                    if($want_tshirt)
                    {
                        if(!isset($fields['tsize']))
                        {
                            $err = true;
                            $err_msg .= "<div class='p'><b>Please select a size for your t-shirt.<b></div>";
                        }
                        else
                        {
                            $tshirt = "<div class='p'>You have chosen <b>".$size_map[$tsize]." t-shirt</b>.</div>";
                            $text .= $size_map[$tsize]." T-shirt\n";
                        }
                    }

                    if($want_mug)
                    {
                        $mug = "<div class='p'>You have chosen a <b>mug</b>.</div>";
                        $text .= "Mug\n";
                    }

                    // Modification by Noah Santorello <nks25@cornell.edu>
                    $paypal = ($fields['paymethod'] == 'paypal');//isset($fields['paypal']);
                    
                    if($paypal)
                    {
                        $action = "./index.php?a=cc&s=donation&done=1&paypalnow=1&firstpayment=".$fields['first_payment'];
                        $text .= "Paid by PayPal.\n";
                    }
                    else
                    {
                        $action = "./index.php?a=cc&s=donation&done=1";
                        $text .= "Paid via check.\n";
                    }
                    
                    // donation level check
                    if($total < 10000)
                    {
                        if($c3 != 0)
                            $err2 = true;
                        if($total < 5000)
                        {
                            if($c2 != 0)
                                $err2 = true;
                            if($total < 2500)
                            {
                                if($c1 != 0)
                                    $err2 = true;
                                if($total < 1000)
                                {
                                    if($c0 != 0)
                                        $err2 = true;
                                }
                            }
                        }
                        if($err2)
                        {
                            $err_msg .= "<div class='p'><b>Please select the appropriate gifts for your donation level.</b></div>";
                            $err = true;
                        }
                    }
                    if($err)
                    {
                        $out .= eval($this->temps->d('CC_DONATE'));
                        break;
                    }
                    
                    $out .= eval($this->temps->d('CC_DON_CONFIRM'));
                    break;

                }
                else
                {
                    $out .= eval($this->temps->d('CC_DONATE'));
                    break;
                }
            case 'main':
            default:
                $out .= eval($this->temps->d('CC_MAIN'));
        }
        return eval($this->temps->d('MAIN_LAYOUT'));
    }
}
