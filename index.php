<?php

    session_start();
    include("connection.php");

    if(isset($_SESSION['sid'])) {
        header("location:home.php");
        exit();
    }

    if(isset($_POST['submit']))
	{
		if(!empty($_POST['email']) && !empty($_POST['password']))
		{
			$sql = "SELECT * from tbl_login";
			$result = mysqli_query($con, $sql);
			while($row=mysqli_fetch_array($result))
			{
				$id=$row['uid'];
				$email=$row['email'];
				$password=$row['password'];
				if($_POST['email']==$email && $_POST['password']==$password)
				{
					$_SESSION['sid'] = $row['uid'];
					header("location:home.php");
				}
			}
		}
	}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-CRUD Login</title>
</head>
<body>
    <form action="" method="post">
        Email: <input type="email" name="email" placeholder="Enter yor email here.." required><br>
        Password: <input type="password" name="password" placeholder="Enter your password here.." required><br>
        <input type="submit" name="submit" VALUE="LOGIN">
    </form>
</body>
</html>