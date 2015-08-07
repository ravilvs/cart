<?php
	require_once('variables.php');

	if($_session['login'] == 0)
	{
		header ("location: register.php");
		return;
	}

	 $sqlcon = mysqli_connect($_session['server'], $_session['user'], $_session['password'], $_session['database']);
	 if(!$sqlcon)
			{
				die("error in connecting database");
			}
	
	
	echo 'user id : ';
	echo $_session['userid'];
	echo '<br />';
	
	
	echo 'prod id : ';
	echo $_post['prodid'];
	echo '<br />';

	echo 'qty : ';
	echo $_post['quantity'];
	echo '<br />';
	//insert
	$qury = "insert into cartdetails(". "userid, productid, ordquantity" . " ) values (" . $_session['userid'] . "," . $_post['prodid'] . "," . $_post['quantity'] . ")";
	echo $qury;
	$result = $sqlcon -> query($qury);
	
	$sqlcon -> close();

	header ("location: cart_list.php");
	
	
	//echo 'added to cart successfully!';
	
	
?>