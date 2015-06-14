<?php
	session_start();
	
	if(!isset($_SESSION['server']))
	{
		$_SESSION['server'] = '127.0.0.1';
		$_SESSION['user'] = 'sravani';
		$_SESSION['password'] = 'pass123';
		$_SESSION['database'] = 'sravanicart';
		$_SESSION['userid'] = 0;
		$_SESSION['login'] = 0;
	}
	
?>