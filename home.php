
<?php
    session_start();
    include 'connection.php';

    if($_SESSION['sid']==null)
    {
        header('location: index.php');
    }    
?>  

<body>

    <h1>
        PHP CRUD Operations
    </h1>

                        <h2>List of Records</h2> Add a user?
                        <a href="add.php?action=add"><input type="button" value="Add New"></a>
                        <a href="logout.php"> <input type="button" value="LOGOUT"></a>
                                
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                   
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Comment</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                        <tbody>
                                 <?php                  
                $query = 'SELECT * FROM tbl_user';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['first_name'].'</td>';
                            echo '<td>'. $row['middle_name'].'</td>';
                            echo '<td>'. $row['last_name'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['comment'].'</td>';
                            echo '<td> <a href="edit.php?action=edit & id='.$row['user_id'] . '"> <input type="button" value="EDIT"> </a> ';
                            echo ' <a href="delete.php?type=people&delete & id=' . $row['user_id'] . '"><input type="button" value="DELETE"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
</body>

</html>
