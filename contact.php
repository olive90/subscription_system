<?php 

include('header.php');

?>
<link rel="stylesheet" type="text/css" href="style.css">
<table style="margin-top:40px;"align="center" cellpadding="12" bgcolor="#09B798" width="1000" height="500">
<tr>
    <td><h2 align="center" class="heading1" >Please Enter the Details</h2>




<div id="page-wrapper">
	  

		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="field">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
			</div>

			<div class="field">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>

			<div class="field">
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>
			</div>

			<div class="field">
				<button type="submit">Send</button>
				<button type="reset">Reset</button>
			</div>
			
		</form>
	</div>
	
</tr>
	</table>
	
	
	
<?php 

include('footer.php');

?>
