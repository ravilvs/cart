<?php
	 echo 'Session Created';

	session_start();
	 echo 'Stage-1';
	
	if(!isset($_SESSION['server']))
	{
	 echo 'Stage-2';
	    
	    
		$_SESSION['server'] = '127.6.94.130';
		$_SESSION['user'] = 'adminqDjdZee';
		$_SESSION['password'] = 'bwGDtxB_N8-I';
		$_SESSION['database'] = 'ravi';
		$_SESSION['userid'] = 0;
		$_SESSION['login'] = 0;
	}
	
?>