<!DOCTYPE html>
<html lang="en">


<?php

  session_start();       
  include('connection.php');
       
?>  
<body>
         <h1 class="page-header">
            PHP CRUD <small>Create, Read, Update and Delete</small>
        </h1>
        
<?php 
  $query = 'SELECT * FROM tbl_user
              WHERE
              user_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $user_id = $row['user_id'];
                $first_name = $row['first_name'];
                $middle_name = $row['middle_name'];
                $last_name = $row['last_name'];
                $address = $row['address'];
                $contact = $row['contact'];
                $comment = $row['comment'];
             
              }
              
              $id = $_GET['id'];
         
?>

   
      <h2>Edit Records</h2>
            <form role="form" method="post" action="edit1.php">
                  
              <input type="hidden" name="id" value="<?php echo $user_id; ?>" />
              <input type="text" placeholder="First Name" name="firstname" value="<?php echo $first_name; ?>">
              <input type="text" placeholder="Middle Name" name="middlename" value="<?php echo $middle_name; ?>">
              <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $last_name; ?>">
              <input type="text" placeholder="Address" name="address" value="<?php echo $address; ?>">
              <input type="text" placeholder="Contact" name="contact" value="<?php echo $contact; ?>">
              <label>Comment</label>
              <textarea rows="3"  name="comment"><?php echo $comment; ?></textarea>
              <button type="submit">Update</button>
              
            </form>  

</body>

</html>

