<html>
<head>
<title>
Smart Cart
</title>
</head>
<link rel='stylesheet' type = 'text/css' href='default1.css'>
<body>
<div id = 'topboxS'>
	<img src="images/coollogo_com-958611129.png">
</div>
<?php
require_once('variables.php');
	
	
	if(isset( $_POST['user']))
	{
		$selusr = $_POST['user'];
	}
	if(isset( $_POST['email']))
	{
		$selemail = $_POST['email'];
	}
	 $sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
	 if(!$sqlcon)
			{
				die("Error in connecting database");
			}
	 $sql = "select password from users where userName=" . "'" . $selusr . "'" . "and emailid=" . "'" . $selemail . "'";
	 $result = $sqlcon -> query($sql);
	 $row = $result -> fetch_assoc();
	 if($row)
	 {
		echo "<div id='password'>";
		echo 'Your password is: ';
		echo "'";
		echo $row['password'];
		echo "'";
		echo "</div>";
	 }
	$sqlcon->close();
?>
<div id = 'bottomboxS'>
	<p><b>Copyright : SRAVANI LALITHA, AMRITA SCHOOL OF ENGINEERING, AMRITAPURI</b>.</p>
</div>
<div id = boxlinks>
<a href="index.php?"><b>|Home|</b></a>
<a href="login.php?"><b>|Login|</b></a>
<a href="#"><b>|My Account|</b></a>
</div>
<div id = 'imageS'>
	<img src="shopping..png">
</div>
</body>
</html>