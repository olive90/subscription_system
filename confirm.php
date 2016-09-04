<?php
include("header.php");
include("connect-db.php");

if(isset($_POST['submit'])){

$trns =  $_POST['trns'];


if ($trns != "") {
//exit("Stopped");


$sql="UPDATE `subscription` SET `status` = 'PAID' WHERE `transactionnum` = '$trns'";
$retval=mysql_query($sql);
if(!$retval)
{

die('not create'. mysql_error());
}

else{
echo "<script> alert('Status Updated') </script>";
}
}
}

?>

<link rel="stylesheet" type="text/css" href="style.css">
<div style="margin-top:30px; margin-left:20%; background:#09B798; height:350px;width:60%;" >
<table align="center" style="padding:60px">
<tr>
<td>
<h3 align="center" class="heading1" color="#FFF5EE" >Please Enter the Reference Number</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<p align="center">

<b>Reference Number:</b><br>
<input type="text" name="trns"><br/>
<br />
	<input type="submit" name="submit" value="Submit">
	
	</p>
</form>
</td>
</tr>
</table>
</div>


<?php
include("footer.php");
?>
