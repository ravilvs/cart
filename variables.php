<?php
	session_start();
	
	if(!isset($_SESSION['server']))
	{
	    
	    echo 'Session Created';
	    
		$_SESSION['server'] = '127.6.94.130';
		$_SESSION['user'] = 'adminqDjdZee';
		$_SESSION['password'] = 'bwGDtxB_N8-I';
		$_SESSION['database'] = 'ravi';
		$_SESSION['userid'] = 0;
		$_SESSION['login'] = 0;
	}
	
?>