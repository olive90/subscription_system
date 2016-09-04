<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style=background-color:#C9C6C6>
<?php
	include('header.php');
	?>
<h1 align='center'>Welcome To The Customer Panel</h1>
<h3 align='center'>Click "delete" button to delete the entry.</h3>
<?php

	
	include('connect-db.php');




	$result = mysql_query("SELECT * FROM subscription") 
		or die(mysql_error());  
		

	echo "<table align='center' cellpadding='10' bgcolor='#81BEF7' width='500' border='2' >";
	echo "<tr> <th><i><b>Name</b></i></th> <th><i><b>House Number</b></i></th> <th><i><b>Flat Number</b></i></th> <th><i><b>Subscription Amount</b></i></th> <th><i><b>Date of Subscription</b></i></th> <th><i><b>Contact No</b></i></th><th><i><b>Email</b></i></th><th><i><b>Reference Number</b></i></th><th><i><b>status</b></i></th> <th><i><b>Delete</b></i></th></tr>";
	
	while($row = mysql_fetch_array( $result )) {
		
	
		echo "<tr>";
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['houseno'] . '</td>';
		echo '<td>' . $row['flatno'] . '</td>';
		echo '<td>' . $row['subscriptionamount'] . '</td>';
		echo '<td>' . $row['dateofsubscription'] . '</td>';
		echo '<td>' . $row['contactno'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['transactionnum'] . '</td>';
		echo '<td>' . $row['status'] . '</td>';
		
		echo '<td><a href="delete.php?id=' . $row['id'] . '"><b class="button">Delete<b></a></td>';
		echo "</tr>"; 
	} 

	
	echo "</table>";
	
?>

<?php
include('footer.php');
?>
</body>
</html>	