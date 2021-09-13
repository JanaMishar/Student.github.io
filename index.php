<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
			<label>Name:</label>
			<input type="text" name="name" value="">
			<br>
			<br>

			<label>Email:</label>
			<input type="text" name="email" value="">
			<br>
			<br>

			<label>Phone:</label>
			<input type="text" name="phone" value="">
			<br>
			<br>

			<label>Degree:</label>
			<input type="text" name="degree" value="">
			<br>
			<br>

			<label>Address:</label>
			<input type="text" name="address" value="">
			<br>
			<br>

			<label>percentage of 12th:</label>
			<input type="text" name="percentage" value="">
			<br>
			<br>

			<input type="submit" name="submit" value="register">
			<a href="login.php">check form</a>

	</form>

	<?php

			include 'connection.php';

			

			if (isset($_POST['submit'])){



				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$degree=$_POST['degree'];
				$address=$_POST['address'];
				$percentage=$_POST['percentage'];


				$query="insert into stureg(name,email,phone,degree,address,percentage) values('$name','$email','$phone','$degree','$address','$percentage') ";
				$insertdata=mysqli_query($con,$query);

				if ($insertdata){
					?>
					<script>
							alert('data inserted successfully');

					</script>
					<?php
				}else{
					?>
					<script>
							alert('data inserted successfully');

					</script>
					<?php
				}

			}

	?>

</body>
</html>