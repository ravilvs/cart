<?php
	session_start();
?>

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
echo "<div id = 'middleboxL'>";
	echo '<form method="POST" action="login_check.php">User Name:  <input type="text" name="user" size="40"><br><br>Password:  <input type="password" name="password" size="40"><br><br><input id="button" type="submit" name="submit"value="Log-In"></form>';
	echo '<a href ="forgotpass.php?">Forgot Password</a>';
	echo '<br />';
	echo '<br />';
	echo '<a href="register.php?"><button type="button">Register</button></a>';
echo '</div>';
?>
<div id = 'bottomboxS'>
	<p><b>Copyright : SRAVANI LALITHA, AMRITA SCHOOL OF ENGINEERING, AMRITAPURI</b>.</p>
</div>
<div id = boxlinks>
<a href="index.php?"><b> |Home| </b></a>
<?php
	if($_SESSION['login'] == 0)
	{
?>
<a href="login.php?"><b> |Login| </b></a>
<?php
	}
else
	{
?>
<a href="logout.php?"><b> |Logout| </b></a>
<a href="#"><b> |My Account| </b></a>
<?php
	}
?>
</div>
<div id = 'imageS'>
	<img src="images/shopping..png">
</div>
</body>
</html>