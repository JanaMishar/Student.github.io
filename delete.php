<?php
	include 'connection.php';
	$id=$_GET['idd'];
	$query="delete from stureg where id=$id";
	$processquery=mysqli_query($con,$query);

	if($processquery){
		?>
		<script>
			alert('successfully deleted');
		</script>
		<?php
		header('location:show.php');
	}else{
		?>
		<script>
			alert('invalid not deleted');
		</script>
	<?php
	}




?>