<?php
	session_start();
?>

<html>
<head>
<title>
smart cart
</title>
</head>
<link rel='stylesheet' type = 'text/css' href='default1.css'>
<body>
<div id = 'topboxs'>
	<img src="images/coollogo_com-958611129.png">
</div>
<?php
echo "<div id = 'middleboxl'>";
	echo '<form method="post" action="login_check.php">user name:  <input type="text" name="user" size="40"><br><br>password:  <input type="password" name="password" size="40"><br><br><input id="button" type="submit" name="submit"value="log-in"></form>';
	echo '<a href ="forgotpass.php?">Forgot Password</a>';
	echo '<br />';
	echo '<br />';
	echo '<a href="register.php?"><button type="button">register</button></a>';
echo '</div>';
?>
<div id = 'bottomboxs'>
	<p><b>copyright : sravani lalitha, amrita school of engineering, amritapuri</b>.</p>
</div>
<div id = boxlinks>
<a href="index.php?"><b> |home| </b></a>
<?php
	if($_SESSION['login'] == 0)
	{
?>
<a href="login.php?"><b> |login| </b></a>
<?php
	}
else
	{
?>
<a href="logout.php?"><b> |logout| </b></a>
<a href="#"><b> |my account| </b></a>
<?php
	}
?>
</div>
<div id = 'images'>
	<img src="images/shopping.png">
</div>
</body>
</html>