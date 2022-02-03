<?php
       session_start();
        include '../config/connection.php';
                  $checkUser = "SELECT * FROM user_tbl WHERE email and password";
                  $result = mysqli_query($conn,$checkUser);
                     if (mysqli_num_rows($result)>0) 
                     {
                          while ($row = mysqli_fetch_assoc($result)) 
                          {
                              $_SESSION['id']    = $row['id'];
                              $_SESSION['name']  = $row['name'];
                               $_SESSION['image']  = $row['image'];
                               $_SESSION['email']  = $row['email'];
                                 $_SESSION['phone']  = $row['phone'];

                           }
                     }
?>