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

ob_start('ob_gzhandler');    // GZip
set_magic_quotes_runtime(0); // MagicQuotes

session_start();

if(!isset($_GET['a']))
	$_GET['a'] = 'def';

if(!file_exists('./mods/' . $_GET['a'] . '.php')){
	$_GET['a'] = 'def';
}

require './lib/settings.php';
require './lib/site.php';
require './lib/perms.php';
require './lib/users.php';
require './lib/mysql.php';
require './lib/temps.php';
require "./mods/{$_GET['a']}.php";

$module = new $_GET['a'];
$module->set = $site_set;
$module->session['id'] = session_id();
$module->db = new db('localhost', 'musicald_acacia', 'BlAcK&GoLd', 'musicald_acacia', $site_set['PREFIX']);
$module->set_user();
$module->temps = new templates($module->db);

echo $module->exe($_GET['p']);

if(isset($_GET['debug']))
{
	echo "<pre>"; print_r($module->db->qstore); echo "</pre>";
}

?>