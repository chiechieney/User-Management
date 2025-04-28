<?php

require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

    $genders= mysqli_real_escape_string($conn, $_POST['genders']);
   

    $check_username = mysqli_query($conn, "SELECT * FROM tbl_genders WHERE gender = '$gender' ");
    $result = mysqli_num_rows($check_username);

    if ($result == 0) {

        
        $insert_user = mysqli_query($conn, "INSERT INTO tbl_genders ( gender ) VALUES ('$genders')");
 
       header ("location: ../add.genders.php");
    } else {
    header ("location: ../add.genders.php");
}

}
?>