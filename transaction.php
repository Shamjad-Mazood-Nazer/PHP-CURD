
<?php
       
       session_start();
	   include('connection.php');

       
        ?>   
<body>

 

                        <h1>
                           PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>
                       


             
                <?php
						$fname = $_POST['firstname'];
                        $mname = $_POST['middlename'];
                        $lname = $_POST['lastname'];
						$address = $_POST['address'];
						$contct = $_POST['contact'];
						$comment = $_POST['comment'];
						$sid = $_SESSION['sid'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO tbl_user
								(id, user_id, first_name, middle_name, last_name, address, contact, comment)
								VALUES ('', '".$sid."','".$fname."','".$mname."','".$lname."','".$address."','$contct','".$comment."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>

</body>

</html>

