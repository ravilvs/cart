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
	 $sqlcon = mysqli_connect($_session['server'], $_session['user'], $_session['password'], $_session['database']);
	 if(!$sqlcon)
			{
				die("error in connecting database");
			}
			
	
	//select
	$sql ="select p.productid, p.productname, cd.ordquantity, p.price, pg.groupname, cd.ordquantity * p.price as amount from products p inner join cartdetails cd on p.productid = cd.productid inner join productgroups pg on p.groupid = pg.groupid where userid=" . $_session['userid'] . " order by p.productname";
	
	$res = $sqlcon -> query($sql);
	
	echo "<div id='middleboxfp'>";
	echo "<table border = '1' cellspacing = '2' cellpadding = '2' align = 'center'>";


		echo '<tr>';
		
		echo '<td>';
		echo 'group name';
		echo '</td>';

		echo '<td>';
		echo 'product name';
		echo '</td>';
		
		echo '<td>';
		echo 'ord qty';
		echo '</td>';
		
		echo '<td>';
		echo 'price';
		echo '</td>';
	
		echo '<td>';
		echo 'amount';
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
		
		echo '</tr>';
		
		$sum = 0;
	
	while($row = $res -> fetch_assoc())
	{
		echo '<tr>';
		
		echo '<td>';
		echo $row['groupname'];
		echo '</td>';
		
		echo '<td>';
		echo $row['productname'];
		echo '</td>';
		
		echo '<td>';
		echo $row['ordquantity'];
		echo '</td>';
		
		echo '<td>';
		echo $row['price'];
		echo '</td>';
		
		$amount = $row['amount'];
		echo '<td style = "text-align:  right;">';
		echo 'rs ' . $row['amount'];
		echo '</td>';
		
		echo '<td style = "text-align:  right;">';
		echo "<img src = 'images/remove from shopping cart.jpg'>";

		echo '<a href="remove.php?productid=' ;
		echo $row['productid'] ;
		echo '">remove</a>';

		echo '</td>';
		
		echo '</tr>';
		$sum = $sum + $amount;
		
	}
	
	echo '<tr>';
		
		echo '<td>';
		echo 'total amount';
		echo '</td>';

		echo '<td>';
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
	
		echo '<td style = "text-align:  right;">';
		echo 'rs ' . $sum;
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
		
		echo '</tr>';
	
	
	echo '</table>';
	
	
	$sqlcon -> close();
	 echo '<a href = "index.php?groupid=';
	 echo $_session['currentgroupid'];
	 echo '&ordcol=';
	 echo $_session['currentordcol'];
	 echo '">';
	 echo 'back';
	 echo '</a>';
	 echo "</div>";
?>
<div id = 'bottomboxs'>
	<p><b>copyright : sravani lalitha, amrita school of engineering, amritapuri</b>.</p>
</div>
<div id = boxlinks>
<a href="index.php?"><b> |home| </b></a>
<?php
	if($_session['login'] == 0)
	{
?>
<a href="login.php?"><b> |login| </b></a>
<?php
	}
else
	{
?>
<a href="logout.php?"><b> |logout| </b></a>
<?php
	}
?>
</div>
<div id = 'images'>
	<img src="images/shopping.png">
</div>
</body>
</html>