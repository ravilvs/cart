<?php
	session_start();
	
	if(!isset($_SESSION['server']))
	{
		$_SESSION['server'] = 'sravanicart-cartsmartcart.rhcloud.com';
		$_SESSION['user'] = 'adminfvNIQ7T';
		$_SESSION['password'] = '5Qc7jxBG-Tsu';
		$_SESSION['database'] = 'sravanicart';
		$_SESSION['userid'] = 0;
		$_SESSION['login'] = 0;
	}
	
?>