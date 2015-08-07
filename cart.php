<?php
	require_once('variables.php');

	if($_SESSION['login'] == 0)
	{
		header ("location: register.php");
		return;
	}

	 $sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
	 if(!$sqlcon)
			{
				die("Error in connecting database");
			}
	
	
	echo 'user id : ';
	echo $_SESSION['userid'];
	echo '<br />';
	
	
	echo 'prod id : ';
	echo $_POST['prodid'];
	echo '<br />';

	echo 'qty : ';
	echo $_POST['quantity'];
	echo '<br />';
	//insert
	$qury = "insert into cartdetails(". "userid, productid, ordquantity" . " ) values (" . $_SESSION['userid'] . "," . $_POST['prodid'] . "," . $_POST['quantity'] . ")";
	echo $qury;
	$result = $sqlcon -> query($qury);
	
	$sqlcon -> close();

	header ("location: cart_list.php");
	
	
	//echo 'added to cart successfully!';
	
	
?>