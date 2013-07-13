<?php

// Require essential files
require_once("phpFlickr/phpFlickr.php");

$userid = "22567809@N03";
$apikey = "3d169b8eca75f73703354ff24d31e48e";

$get = $HTTP_GET_VARS;

// Create phpFlickr API object
$f = new phpFlickr($apikey);

// If you are looking at a particular photo
if (isset($get['photoid']))
{

	$photo = $f->photos_getInfo($get['photoid']);

	echo '<table align="center" cellpadding="5"><tr>'

	$thumburl = 'http://farm' . $get['farm'] . '.static.flickr.com/' . $photo['server'] .'/' . $photo['id'] . '_' . $photo['secret'] . '_t.jpg';

	echo '<td><img src="' . $thumburl . '" border="2" style="border-color: #fc3"></td>';

	echo '</tr></table>';

}

// If you are looking at a particular set
else if (isset($get['photoset']))
{
	$setimgs = $f->photosets_getPhotos($get['photoset']);

	$rowitr = 0;

	echo '<table align="left" cellpadding="5" cellspacing="20">';

	foreach ($setimgs['photo'] as $photo)
	{
		$thumburl = 'http://farm' . $get['farm'] . '.static.flickr.com/' . $photo['server'] .'/' . $photo['id'] . '_' . $photo['secret'] . '_t.jpg';
		if ($rowitr % 5 == 0) echo '<tr>';
		echo '<td><a href="./photos.php?a=photos&photoid=' . $photo['id'] . '&farm=' . $get['farm'] . '"><img src="' . $thumburl . '" width="75" height="75" border="2" style="border-color: #fc3"></a></td>';
		if ($rowitr % 5 == 3) echo '</tr>';
		$rowitr++;
	}

	if ($rowitr % 5 != 0) echo '</tr>';

	echo '</table>';

}

// Else, get the list of photosets
else
{
	$fsets_r = $f->photosets_getList($userid);

	$fsets = $fsets_r['photoset'];

	echo '<table align="left" cellpadding="5" cellspacing="10">';

	//$rowitr = 0;

	foreach ($fsets as $entry)
	{
		$setimgs = $f->photosets_getPhotos($entry['id']);

		$thumbdata = $f->photos_getInfo($setimgs['photo'][0]['id']);

		// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}_[mstb].jpg
		$thumburl = 'http://farm' . $entry['farm'] . '.static.flickr.com/' . $thumbdata['server'] .'/' . $thumbdata['id'] . '_' . $thumbdata['secret'] . '_t.jpg';

		//if ($rowitr % 2 == 0) echo '<tr>';
		echo '<tr><td><a href="./photos.php?a=photos&photoset=' . $entry['id'] . '&farm='. $entry['farm'] .'"><img src="' . $thumburl . '" width="75" height="75" border="2" style="border-color: #fc3"></a></td><td><div class="title"><a href="./index.php?a=photos&photoset=' . $entry['id'] . '&farm='. $entry['farm'] . '">' . $entry['title'] . '</a></div><div class="entry">' . $entry['description'] . '</div></td></tr>';
		//if ($rowitr % 2 == 1) echo '</tr>';
		
		//$rowitr++;
	}
	
	//if ($rowitr % 2 == 0) echo '</tr>';
	echo '</table>';
	
}

?>
