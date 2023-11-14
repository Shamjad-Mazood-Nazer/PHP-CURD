<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP-CRUD</title>
</head>
<body>
<?php
			session_start();
			$user_id = $_POST['id'];
			$first_name = $_POST['firstname'];
		    $middle_name = $_POST['middlename'];
			$last_name = $_POST['lastname'];
			$address = $_POST['address'];
			$contct = $_POST['contact'];
			$comment = $_POST['comment'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE tbl_user set first_name ="'.$first_name.'",
					middle_name ="'.$middle_name.'", last_name="'.$last_name.'",
					address="'.$address.'",contact='.$contct.', 
					comment="'.$comment.'" WHERE
					user_id ="'.$user_id.'"';
					
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>