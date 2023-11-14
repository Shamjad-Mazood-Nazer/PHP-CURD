
<?php
      session_start(); 
      include('connection.php');       
?>  
<body>
                        <h1>
                           PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>
                       

                  <h2>Add new Records</h2>

                        <form role="form" method="post" action="transaction.php?action=add">

                        <input type="text" placeholder="First Name" name="firstname">

                        <input type="text" placeholder="Middle Name" name="middlename">

                        <input type="text" placeholder="Last Name" name="lastname">

                        <input type="text" placeholder="Address" name="address">

                        <input type="text" placeholder="Contact" name="contact">

                        <label>Comment</label>

                        <textarea rows="3"  name="comment"></textarea>
                            <button type="submit">Save</button>
                            <button type="reset">Reset</button>


                      </form>  
                    

</body>

</html>

