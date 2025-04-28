<?php
require '../../../includes/conn.php';

$id = $_GET['users_id'];


$delete_users = mysqli_query($conn, "DELETE FROM tbl_users WHERE users_id = '$id'");

header( "location: ../list.user.php");

?>