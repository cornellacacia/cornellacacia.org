<?php

#
# build the API URL to call
#

$params = array(
	'api_key'	=> '3d169b8eca75f73703354ff24d31e48e',
	'method'	=> 'flickr.photosets.getList',
	'user_id'	=> '22567809@N03',
	'format'	=> 'php_serial',
);

$encoded_params = array();

foreach ($params as $k => $v){

	$encoded_params[] = urlencode($k).'='.urlencode($v);
}


#
# call the API and decode the response
#

$url = "http://api.flickr.com/services/rest/?".implode('&', 
$encoded_params);

$rsp = file_get_contents($url);

$rsp_obj = unserialize($rsp);


#
# display the photo title (or an error if it failed)
#

if ($rsp_obj['stat'] == 'ok'){

	$photo_set = 
$rsp_obj['photosets']['titleset']['title']['_content'];

	echo "Title is $photo_set!";
}else{

	echo "Call failed!";
}

?>
