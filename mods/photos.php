<?php
/* class author: Noah Santorello <nks25@cornell.edu> */
class photos extends site {
	function exe() {

		$this->temps->get_templates('Officers');
	
		// Require essential files
		require_once("phpFlickr/phpFlickr.php");
		
		$userid = "22709334@N08";
		$apikey = "e894708bcff7ea9a1fab3cda88752efb";
		
		$out = "";

		//$out = "<div class='p'>";

		// Create phpFlickr API object
		$f = new phpFlickr($apikey);
		
		// If you are looking at a particular photo
		if (isset($this->get['photoid']))
		{
		
			$photo = $f->photos_getInfo($this->get['photoid']);
		
			$context = $f->photosets_getContext($this->get['photoid'], $this->get['photoset']);
		
			$settitle = $f->photosets_getInfo($this->get['photoset']);
		
			$out .='<div class="title"><a href="./index.php?a=photos">Acacia Photos</a> :: <a href="./index.php?a=photos&photoset=' . $this->get['photoset'] . '">' . $settitle['title'] . '</a> :: ' . $photo['title'] . '</div><br><br>';
		
			$out .='<table align="center" cellpadding="5"><tr>';
		
			$thumburl = 'http://farm' . $photo['farm'] . '.static.flickr.com/' . $photo['server'] .'/' . $photo['id'] . '_' . $photo['secret'] . '.jpg';
			$prevurl = 'http://farm' . $context['prevphoto']['farm'] . '.static.flickr.com/' . $context['prevphoto']['server'] .'/' . $context['prevphoto']['id'] . '_' . $context['prevphoto']['secret'] . '_t.jpg';
			$nexturl = 'http://farm' . $context['nextphoto']['farm'] . '.static.flickr.com/' . $context['nextphoto']['server'] .'/' . $context['nextphoto']['id'] . '_' . $context['nextphoto']['secret'] . '_t.jpg';
		
			// Display previous image.
			if ($context['prevphoto']['id'] != 0)
				$out .='<td valign="bottom"><a href="./index.php?a=photos&photoset='. $this->get['photoset'] .'&photoid=' . $context['prevphoto']['id'] . '&farm=' . $this->get['farm'] . '"><img src="' . $prevurl . '" border="2" style="border-color: #fc3"></a></td>';
		
			// Display next image.
			if ($context['nextphoto']['id'] != 0)
				$out .='<td valign="bottom" align="right"><a href="./index.php?a=photos&photoset='. $this->get['photoset'] .'&photoid=' . $context['nextphoto']['id'] . '&farm=' . $this->get['farm'] . '"><img src="' . $nexturl . '" border="2" style="border-color: #fc3"></a></td>';
			
			$out .='</tr><tr><td colspan="2"><a href="'. $photo['urls']['url'][0]['_content'] .'"><img src="' . $thumburl . '" border="2" style="border-color: #fc3"></a></td></tr>';
		
			$out .='</table><br>';
			$out .='<div align="center" class="entry"  style="text-align: left">' . ( ($photo['description'] == "") ? "<i>No description.</i>" : $photo['description'] ). '</div><br>';
		
		}
		
		// If you are looking at a particular set
		else if (isset($this->get['photoset']))
		{
			$setimgs = $f->photosets_getPhotos($this->get['photoset']);
		
			$rowitr = 0;
		
			$settitle = $f->photosets_getInfo($this->get['photoset']);
		
			$out .='<div class="title"><a href="./index.php?a=photos">Acacia Photos</a> :: <a href="./index.php?a=photos&photoset=' . $this->get['photoset'] . '">' . $settitle['title'] . '</a></div><br>';
		
			$out .='<table align="center" cellpadding="5" cellspacing="20">';
		
			foreach ($setimgs['photo'] as $photo)
			{
				$thumburl = 'http://farm' . $photo['farm'] . '.static.flickr.com/' . $photo['server'] .'/' . $photo['id'] . '_' . $photo['secret'] . '_t.jpg';
				if ($rowitr % 4 == 0) $out .='<tr>';
				$out .='<td><a href="./index.php?a=photos&photoset='. $this->get['photoset'] .'&photoid=' . $photo['id'] . '&farm=' . $this->get['farm'] . '"><img src="' . $thumburl . '" width="75" height="75" border="2" style="border-color: #fc3"></a></td>';
				if ($rowitr % 4 == 3) $out .='</tr>';
				$rowitr++;
			}
		
			if ($rowitr % 4 != 0) $out .='</tr>';
		
			$out .='</table>';
		
		}
		
		// Else, get the list of photosets
		else
		{
			$fsets_r = $f->photosets_getList($userid);
		
			$fsets = $fsets_r['photoset'];
		
			$out .='<div class="title"><a href="./index.php?a=photos">Acacia Photos</a></div><br>';
		
			$out .='<table align="center" cellpadding="5" cellspacing="10">';
		
			//$rowitr = 0;
		
			foreach ($fsets as $entry)
			{
				$setimgs = $f->photosets_getPhotos($entry['id']);
		
				$thumbdata = $f->photos_getInfo($setimgs['photo'][0]['id']);
		
				// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}_[mstb].jpg
				$thumburl = 'http://farm' . $entry['farm'] . '.static.flickr.com/' . $thumbdata['server'] .'/' . $thumbdata['id'] . '_' . $thumbdata['secret'] . '_t.jpg';
		
				//if ($rowitr % 2 == 0) $out .='<tr>';
				$out .='<tr><td><a href="./index.php?a=photos&photoset=' . $entry['id'] . '&farm='. $entry['farm'] .'"><img src="' . $thumburl . '" width="75" height="75" border="2" style="border-color: #fc3"></a></td><td><div class="title"><a href="./index.php?a=photos&photoset=' . $entry['id'] . '&farm='. $entry['farm'] . '">' . $entry['title'] . '</a></div><div class="entry" style="text-align: left">' . $entry['description'] . '</div></td></tr>';
				//if ($rowitr % 2 == 1) $out .='</tr>';
				
				//$rowitr++;
			}
			
			//if ($rowitr % 2 == 0) $out .='</tr>';
			$out .='</table><br>';//</div>';
		}

		return eval($this->temps->d('MAIN_LAYOUT'));
	}
}
?>
