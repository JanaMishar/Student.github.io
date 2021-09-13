
	<?php
		session_start();
		if(isset($_SESSION['id'])){
			header('location:show.php');
		}


	?>


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<form method="POST">

		<label>uname : </label>
		<input type="text" name="uname">
		<br>
		<br>

		<label>password : </label>
		<input type="text" name="password">
		<br>
		<br>

		<input type="submit" name="submit" value="login">
	</form>

	<?php
	include('connection.php');

	if ($_SERVER['REQUEST_METHOD']=="POST"){



		$uname=$_POST['uname'];
		$pass=$_POST['password'];

		$m=mysqli_query($con,"select * from admin where uname='$uname' and password='$pass'");

		if(mysqli_num_rows($m)<1){
			echo 'faild';


		}

		else{
			$result=mysqli_fetch_array($m);
			$_SESSION['id']=$result['id'];
			header('location:show.php');
			
		}
	}


	?>




	</body>
	</html>





