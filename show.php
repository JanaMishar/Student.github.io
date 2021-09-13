<?php
	session_start();
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')){
		header('location:index.php');
		exit();

	}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php include 'links.php'; ?>
</head>
<body>
	<table>
		<td>	
				<th colspan="2">id</th>
				<th colspan="2">name</th>
				<th colspan="2">email</th>
				<th colspan="2">phone</th>
				<th colspan="2">degree</th>
				<th colspan="2">address</th>
				
				<th colspan="2">percentage</th>
				<th colspan="2">operations</th>
				

		</td>

		<?php

	include 'connection.php';

	$query ='select * from stureg';

	$querydata=mysqli_query($con,$query);

	
	// $rowcount=mysqli_num_rows($querydata);

	// echo $rowcount;

	while ($showdata=mysqli_fetch_array($querydata)){
		?>

		<td>
			<tr colspan="2"><?php echo $showdata['id']; ?></tr>
			<tr colspan="2"><?php echo $showdata['name']; ?></tr>
			<tr colspan="2"><?php echo $showdata['email']; ?></tr>
			<tr colspan="2"><?php echo $showdata['phone']; ?></tr>
			<tr colspan="2"><?php echo $showdata['degree']; ?></tr>
			<tr colspan="2"><?php echo $showdata['address']; ?></tr>
			<tr colspan="2"><?php echo $showdata['percentage']; ?></tr>
			<tr><a href="edit.php?ide=<?php echo $showdata['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true">edit</i></a></tr>
			<tr><a href="delete.php?idd=<?php echo $showdata['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true">delete</i></a></tr>


			<br><br>

		<td>
			</table>

			<a href="logout.php">logout</a>

		<?php

	

	}


?>


		
	

</body>
</html>