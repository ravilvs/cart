<?php
    
//		$_SESSION['server'] = '127.6.94.130';
//		$_SESSION['user'] = 'adminqDjdZee';
//		$_SESSION['password'] = 'bwGDtxB_N8-I';
//		$_SESSION['database'] = 'ravi';
//		$_SESSION['userid'] = 0;
//		$_SESSION['login'] = 0;

session_start();
	
	if(!isset($_SESSION['server']))
	{
	 
	    define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
        define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
        define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
        define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
        define('DB_NAME', getenv('OPENSHIFT_GEAR_NAME'));
	    
		$_SESSION['server'] = constant("DB_HOST");
		$_SESSION['user'] = constant("DB_USER");
		$_SESSION['password'] = constant("DB_PASS");;
		$_SESSION['database'] = constant("DB_NAME");;
		$_SESSION['userid'] = 0;
		$_SESSION['login'] = 0;
	}


?>