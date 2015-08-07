<?php
		$_SESSION['server'] = '127.6.94.130';
		$_SESSION['user'] = 'adminqDjdZee';
		$_SESSION['password'] = 'bwGDtxB_N8-I';
		$_SESSION['database'] = 'ravi';
		$_SESSION['userid'] = 0;
		$_SESSION['login'] = 0;

			$sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
			if(!$sqlcon)
			{
				die("Error in connecting database");
			}
			
			$result = $sqlcon->query("select * from productgroups1");
			echo 'Records : ';
			if($result)
			{
    			while($row = $result->fetch_array())
    			{
			        echo $row[0];
			        echo ' - ';
			        echo $row[1];
			        echo '<br />';
			        
    			}
    		}
            else
			{
			    echo "Error in getting data";
			    echo $mysqli->error;
			    
			}

?>