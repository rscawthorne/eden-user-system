<?php
	// https only
	if (empty($_SERVER['HTTPS']) || ($_SERVER['HTTPS']) != 'on') {
		header('Location: https://' . $_SERVER['HTTP_HOST']);
		exit;
	}
?>
You're using HTTPS.
