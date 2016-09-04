   <?php 
	include("connect-db.php");
	include("header.php");
	
	
	 $query="SELECT * FROM subscription";
		
	 $resource=mysql_query($query,$link);
		  
while($result=mysql_fetch_array($resource))
	{ 
	
	$tmpFlat = $result[3];
	$tmpDate = $result[5];
	$tmpHouse = $result[2];
	
	
	} 
		
		
		
		

if(isset($_POST['submit'])){
$conn=mysql_connect('localhost','ttt','ttt');
if(!$conn)
{

die('not connect'. mysql_error());
}

mysql_select_db('department');

function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$name =  $_POST['name'];
$houseno = $_POST['houseno'];
$flatno= $_POST['flatno'];
$subscriptionamount = $_POST['subscriptionamount'];
$dateofsubscription = $_POST['dateofsubscription'];
$contactno = $_POST['contactno'];
$email = $_POST['email'];

if (!(($tmpFlat == $flatno) && ($tmpDate == $dateofsubscription) && ($tmpHouse == $houseno))) {
//exit("Stopped");


$confirmation = createRandomPassword();
$sql="INSERT INTO subscription (name,houseno,flatno,subscriptionamount,dateofsubscription,contactno,email,transactionnum) VALUES('".$_POST['name']."','".$_POST['houseno']."','".$_POST['flatno']."','".$_POST['subscriptionamount']."','".$_POST['dateofsubscription']."','".$_POST['contactno']."','".$_POST['email']."','$confirmation')";
$retval=mysql_query($sql, $conn);
if(!$retval)
{

die('not create'. mysql_error());
}

else{

}

}

mysql_close($conn);
}

	
	 ?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome..............</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style=background-color:#C9C6C6>

<br />
<br />
<br />
	
<table align="center" cellpadding="10" bgcolor="#FFFFFF" width="80%">
  <tr>
    <td><h3 align="center" class="heading" >Please Enter the Details</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<p align="center">

<b>Name:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" autofocus required placeholder="Full Name" style="width:30%;"><br/>
<br />
<b>House Number:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="houseno" required placeholder="House Number" style="width:30%;"><br/>
<br />
<b>Flat Number:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="flatno" required placeholder="Flat Number" style="width:30%;"><br>
<br />
<b>Subscription Amount:</b>&nbsp<input type="text" name="subscriptionamount" required placeholder="Subscription Amount" style="width:30%;"><br/>
<br />
<b>Date of Subscription:</b>&nbsp&nbsp<input type="text" name="dateofsubscription" required placeholder="Date of Subscription" style="width:30%;"> <br/>
<br />
<b>Contact No:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="contactno" required placeholder="Contact Number" style="width:30%;"> <br/>

<br />
<b>Email:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" required placeholder="Email" style="width:30%;"><br/>
	<br />
	<b>Are you sure? YES:</b><input type="checkbox" name="yes" required >
	<b>NO:</b><input type="checkbox" name="no"><br />
	<br />
	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Cancel">
	</p>
</form>     
  </td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
<?php 

include('footer.php');

?>
</body>
</html>