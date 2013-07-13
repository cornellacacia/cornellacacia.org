<?php

	require '../lib/db.php';

	if(!isset($_GET['a'])) $_GET['a'] = 'guest';
	if(!isset($_GET['s'])) die;
	
	img::prnt_obfs($_GET['a'], $_GET['s']);
	
	class img
	{
		function prnt_obfs($table, $session)
		{
			$db = new mysql('localhost', 'musicald_acacia', 'BlAcK&GoLd', 'musicald_acacia');
			$tab = 'imgauth';
		
			if(!isset($_GET['debug'])){
				header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
				header("Cache-Control: no-store, no-cache, must-revalidate");
				header("Cache-Control: post-check=0, pre-check=0", false);
				header("Pragma: no-cache");
				header("Content-type: image/png");
			}
			
			$s = random::random_string(7);
			$font = random::random_font();
			$fontsize = 22;
			$angle    = 0;
			$numl     = 12;
			
			$db->q("DELETE FROM {$tab} WHERE stamp < NOW() - INTERVAL 1 HOUR");
			$db->q("REPLACE INTO {$tab} (sess_id, stamp, authkey) VALUES ('{$session}', NOW(), '{$s}')");
			
			$size = imagettfbbox($fontsize, $angle, $font, $s);
			
			$fh = $size[1] - $size[5];
			$fw = $size[2] - $size[6];
			
			$h = $fh + 30; // upper left - lower left
			$w = $fw + 10; // upper right - upper left
			
			$im     = imagecreate($w, $h);
			$white  = imagecolorallocate($im, 255, 255, 255);
			$black  = imagecolorallocate($im, 0, 0, 0);
			$brown  = imagecolorallocate($im, 245, 229, 219);
			
			
			imagefilledrectangle($im, 0, 0, $w, $h, $brown);
			
			imagettftext($im, $fontsize, $angle, (($w - $fw) / 2), $h - (($h - $fh) / 2), $black, $font, $s);
			
			$lines = $w / $numl;
			
			$sone = random::random_loc($w);
			$stwo = random::random_loc($w);
			
			for($j = 0; $j <= $numl; $j++){
				imageline($im, $sone, 0, $lines * $j, $h, $black);
				imageline($im, $stwo, $h, $lines * $j, 0, $black);
			}
			
			imagerectangle($im, 0, 0, $w - 1, $h - 1, $black);
			
			imagepng($im);
			imagedestroy($im);
		}
	}
	
	class random
	{
		function random_string($num)
		{
			$alphabet = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$alphabet = preg_split("//", $alphabet);
			
			$rstr = '';
			for($i = 0; $i < $num; $i++){
				$rstr .= $alphabet[rand(1, count($alphabet)-2)];
			}
			return $rstr;
		}
		
		function random_loc($w)
		{
			return rand(0, $w);
		}
		
		function random_font()
		{
			$fonts = array( 'ARIALBD.TTF', 'tahomabd.TTF', 'verdanab.TTF' );
			//$fonts = array( 'GOUDYOSB.TTF', 'tahomabd.TTF' );
			return $fonts[rand(0, count($fonts)-1)];
		}
	}
?>
