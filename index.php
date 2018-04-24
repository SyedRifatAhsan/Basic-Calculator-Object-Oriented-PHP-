<?php
	include 'includes/dbh.inc.php';
	include 'includes/user.inc.php';
	include 'includes/viewUser.nc.php';
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Basic Calculator 	
		</title>
	</head>
	<body>

	<?php
	
		$users =new viewUser();
		$users->showAllUsers();	

	?>	




		<!--<form  method="POST" enctype="multipart/form-data"  action="calc.php" >

			<input type="text" name="num1"><br>
			<input type="text" name="num2"><br>
			<select name="cal">
				<option name="add" >Add</option>
				<option name="mul" >Multiply</option>
				<option name="sub" >Subtract</option>
			</select><br>

			<button type="submit">Calculate</button>
		</form>-->


	</body>
	
</html>