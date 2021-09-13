



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">



		<?php

			include 'connection.php';


			
			

			$idedit=$_GET['ide'];
			$query="select * from stureg where id={$idedit}";
			$processquery =mysqli_query($con,$query);
			$showdata=mysqli_fetch_array($processquery);
	


			

			if (isset($_POST['submit'])){

				$idtab=$_GET['ide'];

				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$degree=$_POST['degree'];
				$address=$_POST['address'];
				$percentage=$_POST['percentage'];


				// $query="insert into stureg(name,email,phone,degree,address,percentage) values('$name','$email','$phone','$degree','$address','$percentage') ";

				$editquery="update stureg set id=$idedit ,name='$name',email='$email',phone='$phone',degree='$degree',address='$address',percentage='$percentage' where id=$idtab";



				$editdata=mysqli_query($con,$editquery);

				if ($editdata){
					?>
					<script>
							alert('data edited successfully');

					</script>
					<?php
				}else{
					?>
					<script>
							alert('data not  edited');

					</script>
					<?php
				}

			}

	?>



			<label>Name:</label>
			<input type="text" name="name" value="<?php echo $showdata['name']; ?>">
			<br>
			<br>

			<label>Email:</label>
			<input type="text" name="email" value="<?php echo $showdata['email']; ?>">
			<br>
			<br>

			<label>Phone:</label>
			<input type="text" name="phone" value="<?php echo $showdata['phone']; ?>">
			<br>
			<br>

			<label>Degree:</label>
			<input type="text" name="degree" value="<?php echo $showdata['degree']; ?>">
			<br>
			<br>

			<label>Address:</label>
			<input type="text" name="address" value="<?php echo $showdata['address']; ?>">
			<br>
			<br>

			<label>percentage of 12th:</label>
			<input type="text" name="percentage" value="<?php echo $showdata['percentage']; ?>">
			<br>
			<br>

			<input type="submit" name="submit" value="edit">
			<a href="login.php">check form</a>

	</form>

	

</body>
</html>