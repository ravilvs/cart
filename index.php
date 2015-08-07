<?php
	require_once('variables.php');
	
	$selgrp = 0;
	$selord = 'N';
	if(isset( $_GET['groupid']))
	{
		$selgrp = $_GET['groupid'];
	}
	if(isset( $_GET['ordcol']))
	{
		$selord = $_GET['ordcol'];
	}
	$_SESSION['currentgroupid'] = $selgrp;
	$_SESSION['currentordcol'] = $selord;
	
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
<div id = 'contentS'>
<div class = 'leftdivWrapperS'>
	<div id = 'leftboxS'>
		Groups :
		<br />
		<?php
			
			$sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
			if(!$sqlcon)
			{
				die("Error in connecting database");
			}
			

			$result = $sqlcon -> query(
			"select pg.groupid, pg.groupname, count(*) itemcount  from productgroups pg inner join products p on p.groupid = pg.groupid group by pg.groupid, pg.groupname");
			
			echo '<ul>';
			while($row = $result->fetch_assoc())
			{
				echo '<li>';
				echo'<a href ="index.php?groupid=' . $row['groupid'] . '&ordcol=' . $selord . '">' . $row['groupname'] . '<a> [';
				echo $row['itemcount'];
				echo ']';
				echo'<br />';
				echo '</li>';
			}
			echo '</ul>';
		?>
	</div>
	
	<div id = 'leftbottomS'>
		Order By:
		<?php
		    echo '<ul>';
				echo '<li>';
					echo'<a href ="index.php?groupid=' . $selgrp . '&ordcol=N' . '">Name</a>';
				echo '</li>';
				echo '<br />';
				echo '<li>';	
					echo'<a href ="index.php?groupid=' . $selgrp . '&ordcol=P' . '">Price</a>';
				echo '</li>';
			echo '</ul>';	
		?>
	</div>
</div>

<div id = 'rightboxS'>
<?php
		$qury = "select productid,productname, price from products where groupid = " . $selgrp ;
		switch($selord)
		{
			case 'N':
				$itemres = $sqlcon -> query($qury . ' order by productname');
				break;
			case 'P':
				$itemres = $sqlcon -> query($qury . ' order by price');
				break;
		}
		while($row = $itemres -> fetch_assoc())
		{
			echo '<div class ="itembrd">';
			echo '<div class = "ProImgBrd">';
			echo '<img src = "images/'.$selgrp.'/'.$row['productid'].'.jpg">';
			echo '</div>';
			echo '<br />';
			echo 'Product Id: '.$row['productid'];
			echo '<br />';
			echo 'Name: '. $row['productname'];
			echo '<br />';
			echo 'Price: '. $row['price'];
			
			echo '<br />';
			if($_SESSION['login'] == 1)
			{
				echo '<form method="POST" action="cart.php">';
				
				echo 'Quantity:  ';

				echo '<input type="text" name="quantity" size="5">';
				echo '<input type="hidden" name="prodid" value = "' . $row['productid'] . '">';
				echo '<br />';
				echo "<img src = 'images/buy-now-button1.png'>";
				echo '<input type="submit" name="cart" value="Add to cart">';
				
			
				echo '</form>';
			
			}
			
			echo '</div>';
		} 
?>	
</div>
</div>
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
<br />
<?php
	}
else
	{
?>
<a href="logout.php?"><b> |Logout| </b></a>
<a href="cart_list.php"><b> |My cart| </b></a>
<br />
<?php
	}
?>
</div>
<div id = 'imageS'>
	<img src="images/shopping..png">
</div>
<?php
		$sqlcon->close();
?>
</body>
</html>