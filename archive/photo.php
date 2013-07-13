<?php

list($width, $height,,) = getimagesize($_GET['url']);

echo "
	<html>
		<head>
			<title>Cornell Acacia</title>
			<style type='text/css'>
			<!--
				body { margin: 0; padding: 0; top-margin: 0; left-margin: 0; right-margin: 0; bottom-margin: 0; 
								background-color: #000000; font-family: verdana; font-size: 12px; text-align: center; }
				.picture { text-align: center; }
				.desc  { width: {$width} - 10; padding: 0 5px 0 5px; color: #fff; }
				.copy  { width: {$width}; font-size: 10px; padding: 0 5px 0 5px; color: #fff; }
				.nav   { width: {$width} - 10; padding: 5px; }
				.left  { width: 20%; text-align: left;  float: left; }
				.right { width: 20%; text-align: right; float: right; }
				.mid   { text-align: center; }
				a:link, a:visited, a:active
					{ color: #999999; text-decoration: none; }
				a:hover
					{ color: #ffffff; text-decoration: underline; }
			-->
			</style>
			<script language='javascript'>
				<!--
					window.resizeTo({$width}, {$height}+55);
					window.moveTo(50, 50);
				// -->
			</script>
		</head>
		<body>
			<div class='picture'>
			  <img src='{$_GET['url']}' alt=''/>
			</div>
			</div>
		</body>
	</html>
	";

?>
