<?php

require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

    $roles= mysqli_real_escape_string($conn, $_POST['role']);
   

    $check_username = mysqli_query($conn, "SELECT * FROM tbl_roles WHERE  role = '$role' ");
    $result = mysqli_num_rows($check_username);

    if ($result == 0) {

        
        $insert_user = mysqli_query($conn, "INSERT INTO tbl_roles ( role ) VALUES ('$roles')");
 
       header ("location: ../add.roles.php");
    } else {
    header ("location: ../add.roles.php");
}

}
?>