<?php
require 'config.ini.php';

$conn = new mysqli($config['DATABASE_SERVER'],$config['DATABASE_USER'],$config['DATABASE_PASSWORD'],$config['LIBRARY_DATABASE']);
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

?>
