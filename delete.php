
<?php

	session_start();
    include('connection.php');
       
?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'people':
					$query = 'DELETE FROM tbl_user
							WHERE
							user_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "index.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>