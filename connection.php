<?php
	$server='localhost';
	$username='root';
	$password='';
	$db='studentmanagement';
	$con=mysqli_connect($server,$username,$password,$db);
	if($con){
		?>
		<script>

			alert('connection successfull');
		</script>
		<?php
	}else{
		?>
		<script>

			alert('connection successfull');
		</script>
		<?php

	}



?>